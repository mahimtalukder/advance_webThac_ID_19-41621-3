import React from "react";
import { Link } from "react-router-dom";

const Employees = (props)=>{

    return (
        <tr>
            <td class='py-1'><img src={props.picture}/></td>
            <td>{props.username}</td>
            <td>{props.name}</td>
            <td>{props.email}</td>
            <td><Link to={"/employee/" + props.username}><a href='#' class='btn btn-primary btn-icon-text'>Details</a></Link></td>
        </tr>
    )

}
export default Employees;