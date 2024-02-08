import './App.css';
import Department from './components/Department';
import Patient from "./components/Patient";
import Doctor from './components/Doctor';

const App = () => {
  return (
    <div className="app">
      <Patient name="Liam" age="23" />
      <Department department="Neurology" />
      <Doctor doctor="Dr. Benjamin Wells" />
    </div>
  );
}
export default App;
  
