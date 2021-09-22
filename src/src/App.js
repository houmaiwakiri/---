import logo from './logo.svg';
import './App.css';
import * as React from 'react';
import ReactDOM from 'react-dom';
import Button from '@material-ui/core/Button';

function App() {
  return (
      <div class="header">
        <h1 class="title">となりプロジェクト</h1>
        <Button variant="contained" color="primary">日本地図</Button>
      </div>
  );
}

ReactDOM.render(<App />, document.querySelector('#app'));

export default App;