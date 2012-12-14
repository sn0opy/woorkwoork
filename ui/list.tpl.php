<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Start</th>
			<th>End</th>
			<th>Date</th>
			<th>Duration</th>
		</tr>
	</thead>
	<tbody>
		<F3:repeat group="@entries" value="@entry">
			<tr>
				<td>{{@entry[starttime]}}</td>
				<td>{{@entry[endtime]}}</td>
				<td>{{@entry[date]}}</td>
				<td>{{date('H:i', (@entry[endtime] - @entry[starttime]))}}</td>
			</tr>
		</F3:repeat>
	</tbody>
</table>