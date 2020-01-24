@extends("layouts.default.master")

@section('content')

<div class="body">
	<ol class="breadcrumb">
		<p class="h1 col-blue-grey">Acceuil</p>
		<li class="active">
			<i class="material-icons">home</i>Tableau De Bord
		</li>
		<li class="active">
			<i class="material-icons">home</i>Enseignants
		</li>
	</ol>
</div>

<div class="container-fluid">
	

	<!-- Exportable Table -->
	<div class="row clearfix">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header">
					<h2>
						EXPORTABLE TABLE
					</h2>
					<ul class="header-dropdown m-r--5">
						<li class="dropdown">
							<a  role="button" data-toggle="modal" data-target="#defaultModal">
								<i class="material-icons col-light-blue">group_add</i>
							</a>
							
						</li>
					</ul>
				</div>
				<div class="body">
					<div class="table-responsive">
						<table class="table table-bordered table-striped table-hover dataTable js-exportable">
							<thead>
								<tr>
									<th>Name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Age</th>
									<th>Start date</th>
									<th>Salary</th>
								</tr>
							</thead>
							<tfoot>
								<tr>
									<th>Name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Age</th>
									<th>Start date</th>
									<th>Salary</th>
								</tr>
							</tfoot>
							<tbody>
								<tr>
									<td>Tiger Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
									<td>$320,800</td>
								</tr>
								<tr>
									<td>Garrett Winters</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>63</td>
									<td>2011/07/25</td>
									<td>$170,750</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- #END# Exportable Table -->
</div>

<!-- Advanced Validation -->
<div class="row clearfix modal fade" id="defaultModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="card">
			<div class="header">
				<h2 class="center">ADVANCED VALIDATION</h2>
				
			</div>
			<div class="body">

				<form id="form_advanced_validation" method="POST">
					<div class="form-group form-float">
						<div class="form-line">
							<input type="text" class="form-control" name="minmaxlength" maxlength="10" minlength="3" required>
							<label class="form-label">Min/Max Length</label>
						</div>
						<div class="help-info">Min. 3, Max. 10 characters</div>
					</div>
					<div class="form-group form-float">
						<div class="form-line">
							<input type="text" class="form-control" name="minmaxvalue" min="10" max="200" required>
							<label class="form-label">Min/Max Value</label>
						</div>
						<div class="help-info">Min. Value: 10, Max. Value: 200</div>
					</div>
					<div class="form-group form-float">
						<div class="form-line">
							<input type="url" class="form-control" name="url" required>
							<label class="form-label">Url</label>
						</div>
						<div class="help-info">Starts with http://, https://, ftp:// etc</div>
					</div>
					<div class="form-group form-float">
						<div class="form-line">
							<input type="text" class="dtp form-control " name="date" required>
							<label class="form-label">Date</label>
						</div>
						<div class="help-info">YYYY-MM-DD format</div>
					</div>
					<div class="form-group form-float">
						<div class="form-line">
							<input type="number" class="form-control" name="number" required>
							<label class="form-label">Number</label>
						</div>
						<div class="help-info">Numbers only</div>
					</div>
					
					
					<div class="modal-footer">
						<button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
						<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- #END# Advanced Validation -->


@stop