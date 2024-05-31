from flask import Flask, render_template, jsonify
import requests
import json
import schedule
import time
from threading import Thread

app = Flask(__name__)

TOKEN = 'y0_AgAAAABHYOSJAAWW4AAAAAEFew6aAAD6htmhlOtGG6xmJcKX7KSC1Aqo6Q'
COUNTER_ID = '97354859'

# URL для API Яндекс.Метрики
BASE_URL = 'https://api-metrika.yandex.net/stat/v1/data'

def get_yandex_metrica_data():
    headers = {
        'Authorization': f'OAuth {TOKEN}',
    }
    params = {
        'ids': COUNTER_ID,
        'metrics': 'ym:s:visits,ym:s:avgVisitDurationSeconds',
        'dimensions': 'ym:s:date',
        'date1': '30daysAgo',
        'date2': 'today',
        'accuracy': 'full',
        'limit': 100000,
    }
    response = requests.get(BASE_URL, headers=headers, params=params)
    data = response.json()
    return data

def process_data(raw_data):
    processed_data = {
        'daily': [],
        'weekly': [],
        'monthly': []
    }

    daily_data = raw_data['data']
    for item in daily_data:
        date = item['dimensions'][0]['name']
        visits = item['metrics'][0]
        avg_time = item['metrics'][1]
        processed_data['daily'].append({
            'date': date,
            'visits': visits,
            'avg_time': avg_time
        })

    # Обработка данных для недельного и месячного графиков
    # (в этом примере упрощено, в реальности нужно сгруппировать по неделям и месяцам)
    
    # Сохранение данных в JSON файл
    with open('analytics.json', 'w', encoding='utf-8') as f:
        json.dump(processed_data, f, ensure_ascii=False, indent=4)

def update_data():
    print("Обновление данных...")
    raw_data = get_yandex_metrica_data()
    process_data(raw_data)
    print("Данные обновлены.")

# Планирование обновления данных каждые 30 минут
schedule.every(30).minutes.do(update_data)

if __name__ == "__main__":
    update_data()  # Первоначальное обновление данных при запуске
    while True:
        schedule.run_pending()
        time.sleep(1)
