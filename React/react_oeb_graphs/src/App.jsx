import { useState, useEffect } from 'react'
import '@inb/oeb-widgets-graphs';
import './App.css'

function App() {
  const [ isLoading, setIsLoading ] = useState(true);
  const [ graphData, setGraphData ] = useState(null);
  const [ graphType, setGraphType ] = useState(null);

  useEffect(() => {
    fetch("https://raw.githubusercontent.com/inab/oeb-widgets-graphs/refs/heads/main/src/demo/files/BARPLOT.json")
      .then((response) => response.json())
      .then((data) => {
        let graphType = data.inline_data.visualization.type;
        let graphData = data;
        setGraphData(JSON.stringify(graphData)); 
        setGraphType(graphType);
        setIsLoading(false); 
      });
  }, []);

  if (isLoading) { // ⬅️ si está cargando, mostramos un texto que lo indique
    return (
      <div className="App">
        <h1>Loading data...</h1>
      </div>
    );
  }


  return (
    <>
      <div className='graph-container'>
        <h1>OEB graph</h1>
        <widget-element 
          id="widget-element"
          type={graphType}
          data={graphData}>
        </widget-element>

      </div>
    </>
  )
}

export default App

