<form action="{{@BASE}}/add" method="post" class="form-inline well well-small" style="text-align: center;">
	<input type="text" name="date" class="input input-small" placeholder="Date" value="{{date('d.m.y')}}" />
	<input type="text" name="starttime" class="input input-small" placeholder="Start" value="09:00" />
	<input type="text" name="endtime" class="input input-small" placeholder="End" value="18:00" />
	<input type="submit" class="btn" value="Add" />
</form>


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
				<td>{{date('H:i', @entry['starttime'])}}</td>
				<td>{{date('H:i', @entry['endtime'])}}</td>
				<td>{{date('d.m.Y', @entry['date'])}}</td>
				<td>{{(@entry['endtime'] - @entry['starttime'])/3600}}h</td>
			</tr>
		</F3:repeat>
	</tbody>
</table>