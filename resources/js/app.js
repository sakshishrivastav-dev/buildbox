import './bootstrap';  // Already present
import axios from 'axios';

// Example: Send a GET request to an API endpoint
axios.get('/api/your-endpoint')
  .then((response) => {
    console.log(response.data); // Response ko console mein dikhayenge
  })
  .catch((error) => {
    console.error('Error:', error); // Agar error hota hai toh yeh show hoga
  });
