import React, { useState, useEffect } from "react";
import axios from "axios";
import SideBar from "./side_bar";
import TopNav from "./top_nav";
import List from './emp_list';




const EmployeeList = () => {
    const [employees, setEmployees] = useState([]);

    useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/employee/list")
            .then(resp => {
                console.log(resp.data);
                setEmployees(resp.data);

            }).catch(err => {
                console.log(err);
            });
    }, []);

    return (
        <div class="main-wrapper">
            <div class="page-wrapper">
                <SideBar />
                <TopNav />
                <div class="page-content">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Employee List</h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Username</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody id="tableBody">
                                                <tr>
                                                </tr>
                                                {
                                                    employees.map(employee => (
                                                        <List picture={employee.picture} username={employee.username} name={employee.name} email={employee.email}></List>
                                                    ))
                                                }
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
                    <p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="#">MT</a>.</p>
                </footer>


            </div>
        </div>
    )
}
export default EmployeeList;