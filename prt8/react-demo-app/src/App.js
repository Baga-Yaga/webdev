import React, { useState } from 'react';
import './App.css';

function App() {
  // Declare a state variable to store the input message
  const [message, setMessage] = useState('');

  // Handle changes in the input field
  const handleChange = (event) => {
    setMessage(event.target.value);
  };

  return (
    <div className="App">
      <h1>Simple React App</h1>
      <input 
        type="text" 
        placeholder="Type something..." 
        value={message}
        onChange={handleChange}
      />
      <p>Your message: {message}</p>
    </div>
  );
}

export default App;
