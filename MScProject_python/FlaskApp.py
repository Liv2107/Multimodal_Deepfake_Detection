from flask import Flask, request

app = Flask(__name__)

@app.route('/process', methods=['POST'])
def process_data():
    data = request.json
    # Process the data
    return {'status': 'success'}

if __name__ == '__main__':
    app.run(debug=True)