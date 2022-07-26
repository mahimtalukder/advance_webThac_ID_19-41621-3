import React from 'react';
import {BrowserRouter as Router, Route, Routes} from 'react-router-dom'
import ReactDOM from 'react-dom/client';
import EmployeeList from './contents/employee_list';
import EmployeeDetails from './contents/employee_details';
import reportWebVitals from './reportWebVitals';

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(


<React.StrictMode>
<Router>
 <Routes>
    <Route exact path='/' element={<EmployeeList/>} />
    <Route exact path='/employee/:username' element={<EmployeeDetails/>} />
 </Routes>
</Router>
</React.StrictMode>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
