import os
import webbrowser

def open_html_file(file_path):
    # Convert the file path to a format accepted by webbrowser
    file_path = os.path.abspath(file_path)
    
    try:
        # Open the HTML file in the default web browser
        webbrowser.open("file://" + file_path, new=2)
    except Exception as e:
        print(f"An error occurred: {e}")

# Replace 'path/to/your/file.html' with the actual path to your HTML file
html_file_path = r"D:/John Bryan Pantojan Macalinao/3RD YEAR SCHOOL/3RD YEAR 1ST SEMESTER/IT8-L (ADS) ADVANCE DATABASE SYSTEMS/ACTIVITIES ADS/HRM PHP/tempo_index.html"

open_html_file(html_file_path)
