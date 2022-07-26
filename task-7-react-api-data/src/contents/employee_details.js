import React, { useState, useEffect } from "react";
import { useParams } from "react-router-dom";
import axios from "axios";
import SideBar from "./side_bar";
import TopNav from "./top_nav";
import Footer from './footer';

const EmployeeDetails = () => {
    const [employee, setEmployee] = useState([]);
    let { username } = useParams();
    let url = "http://127.0.0.1:8000/api/employee/"+username;
    useEffect(() => {
        axios.get(url)
            .then(resp => {
                console.log(resp.data);
                setEmployee(resp.data);

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
                                <div class="col-md-12 grid-margin">
                                    <div class="card rounded d-flex justify-content-center p-3">
                                        <div class="card-body">
                                            <h6 class="card-title">Employee Details</h6>
                                            <form>
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input type="text" class="form-control" id="username" disabled value={employee.username}/>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="name" disabled value={employee.name}/>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="text" class="form-control" id="email" disabled value={employee.email}/>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <Footer/>


            </div>
        </div>
    )

}

export default EmployeeDetails;