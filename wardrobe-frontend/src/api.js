import axios from 'axios';
var cors = require('cors')

app.use(cors())

const api = axios.create({
  baseURL: 'http://127.0.0.1:8000/api',
  withCredentials: true, // Important for authentication (Sanctum)
  headers: {
    'Content-Type': 'application/json',
  },
});

export default api;
