import React from "react";

const Employees = (props)=>{

    return (
        <tr>
                  <td class='py-1'>pic</td>
                  <td>{props.username}</td>
                  <td>{props.name}</td>
                  <td>{props.email}</td>
                  <td><a href='#' class='btn btn-primary btn-icon-text'>Edit</a></td>
                  <td><a href='#' class='btn btn-primary btn-icon-text'>Delete</a></td>
                  </tr>
    )

}
export default Employees;