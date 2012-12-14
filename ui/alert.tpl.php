<F3:check if="isset(@SESSION['msg'])">
	<div class="alert alert-{{@SESSION.alert.type}}">{{@SESSION.alert.msg}}</div>
</F3:check>