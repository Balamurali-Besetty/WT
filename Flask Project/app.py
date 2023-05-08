from flask import Flask , render_template , session
app = Flask(__name__)
@app.route('/')
  def home():
    return render_template('índex.html')
