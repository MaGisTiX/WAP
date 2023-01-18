from flask import Flask, request, jsonify
import numpy as np

app = Flask(__name__)

@app.route('/', methods=['GET', 'POST'])
def index():
    return "Hello World!"

@app.route('/matrix_multiplication', methods=['GET', 'POST'])
def matrix_multiplication():
    try:
        matrix1 = request.args.get('matrix1')
        matrix2 = request.args.get('matrix2')
        matrix1 = np.array(eval(matrix1))
        matrix2 = np.array(eval(matrix2))
        result = np.dot(matrix1, matrix2)
        return jsonify(result.tolist())
    except:
        return "Error"

if __name__ == '__main__':
    app.run()
    
"""

Example URL to test the API on localhost:

http://localhost:5000/matrix_multiplication?matrix1=[[1,2,3],[4,5,6]]&matrix2=[[1,2],[3,4],[5,6]]

Result:

[[22, 28], [49, 64]]

"""

