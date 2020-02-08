@extends('layouts.app')
@section('content')
<div class="jumbotron invisible "></div>
<div class="maar">
    <div><h1>View Stock</h1></div>
<table class="table text-white-50">
  <thead class="thead-light ">
    <tr>
      <th scope="col">ID</th>
      <th scope="col"> Name</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Status</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Edit/Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Owais Abid</td>
      <td>03345078214</td>
      <td>I-14 Islamabad</td>
      <td>Active</td>
      <td>14 Jun 2020</td>
      <td>12:45 pm</td>
      <td>
          <button type="button" class="btn btn-secondary">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </td>    
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Saad Awan</td>
      <td>03345078214</td>
      <td>I-10 Islamabad</td>
      <td>Active</td>
      <td>15 Jun 2020</td>
      <td>10:45 pm</td>
      <td>
          <button type="button" class="btn btn-secondary">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>abdul Wasy</td>
      <td>03345078214</td>
      <td>gawalmandi rawalpinidi</td>
      <td>Active</td>
      <td>22 Jun 2020</td>
      <td>4:45 pm</td>
      <td>
          <button type="button" class="btn btn-secondary">Edit</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </td>
    </tr>
  </tbody>
</table>



</div>

@endsection