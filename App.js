import React from 'react';
import ReactPlayer from 'react-player';

function App() {
  return (
    <div style={{ padding: 20 }}>
      <h2>Silicon media</h2>
      <ReactPlayer
        url="https://www.w3schools.com/html/mov_bbb.mp4"
        controls={true}
        width="100%"
        height="400px"
      />
    </div>
  );
}

export default App;
