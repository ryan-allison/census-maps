@extends('layout')

@section('content')

<style>
	#LIN {
		position: relative;
		max-width: 354px;
		margin: 0 auto;
	}

	#LIN > span {
		position: absolute;
		top: 0;
		width: 100%;
		max-width: 354px;
		left: 0;
		right: 0;
		margin-left: auto;
		margin-right: auto;
	}
</style>

<div>
	<div style="text-align: center; padding: 2em;">
		<h1>Contact</h1>
		<br>
		<br>
		<div id="LIN">
			<span>
				<div style="height: 40%; width: 100%"></div>
					<div class="progress" style="margin-left: 2em; margin-right: 2em; margin-top: 5em">
						<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
					</div>
				</div>
			</span>
			<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
			<script type="IN/MemberProfile" data-id="https://www.linkedin.com/in/ryanallison1" data-format="inline" data-related="false"></script>
		</div>
	</div>
</div>

@stop