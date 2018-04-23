
from flask import Flask, jsonify
import project
app = Flask(__name__)
tasks = 1
@app.route('/')
def index():
    return project.a()

if __name__ == '__main__':
    app.run(debug=True)