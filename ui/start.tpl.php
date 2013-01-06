<div class="row-fluid">
<form action="{{@BASE}}/add" method="post" class="form-inline well well-small span10" style="text-align: center;">
    <input type="text" name="date" class="input span2" placeholder="Date" value="{{date('d.m.y')}}" />
    <input type="text" name="starttime" class="input span2" placeholder="Start" value="09:00" />
    <input type="text" name="endtime" class="input span2" placeholder="End" value="18:00" />
    <input type="submit" class="btn" value="Add" />
</form>
<div class="span2 well well-small fulltime">
<input type="text" class="input span2" value="{{date('H', @fulltime)}}h" readonly="readonly" style="width: 100%; margin-bottom: 0px;" />
</div>
</div>

<F3:check if="count(@entries)">
    <F3:true>
    <table class="table">
        <thead>
            <tr>
                <th>Start</th>
                <th>End</th>
                <th>Date</th>
                <th>Duration</th>
            </tr>
        </thead>
        <tbody>
            <F3:repeat group="@entries" value="@week" key="@monthnum">
                <tr class="alert monthrow">
                    <td colspan="3"><span class="month">{{@monthnum}}</span></td>
                    <td>
                        {{@fullduration[@monthnum]}}h /
                        <F3:check if="(@fullduration[@monthnum] - 40) < 0">
                            <F3:true>
                                <span style="color: red;">{{@fullduration[@monthnum] - 40}}h</span>
                            </F3:true>
                            <F3:false>
                                <span style="color: #060;">+{{@fullduration[@monthnum] - 40}}h</span>
                            </F3:false>
                        </F3:check>
                    </td>
                </tr>
                <F3:repeat group="@week" value="@day">
                <tr>
                    <td>{{date('H:i', @day['starttime'])}}</td>
                    <td>{{date('H:i', @day['endtime'])}}</td>
                    <td>{{date('d.m.Y', @day['date'])}}</td>
                    <td>{{@day['duration']}}h</td>
                </tr>
                </F3:repeat>
            </F3:repeat>
        </tbody>
    </table>
    </F3:true>
    <F3:false>
        <div class="alert alert-info">Do some work!</div>
    </F3:false>
</F3:check>