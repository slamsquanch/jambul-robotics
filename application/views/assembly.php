<div>
    <h2>Assembly</h2>
    <br/>
</div>
<div class="form-group">
    <nav class="form-group">
        <ul class="form-group">
        <h4>Head</h4>
            <form name="robotForm" class="form-group" method="post" action="/assembly/assemble">
                <div align="center">
                    <select name="headDropdown">
                    {head}
                         <option value="{partID}">ID: {partID}  Code: {partCode}</option>
                    {/head}
                    </select>
                </div>
            <h4>Torso</h4>
                <div align="center">
                    <select name="torsoDropdown">
                    {torso}
                         <option value="{partID}">ID: {partID}  Code: {partCode}</option>
                    {/torso}
                    </select>
                </div>
            <h4>Legs</h4>
                <div align="center">
                    <select name="legsDropdown">
                    {legs}
                         <option value="{partID}">ID: {partID}  Code: {partCode}</option>
                    {/legs}
                    </select>
                </div>
            <input type = "submit" value = "Submit">
            </form>
        </ul>
    </nav>
    <br/>
</div>
<h3>Robots</h3>
<div class="row">
{robots}
    <h4>Robot {robotID}</h4>
    <div class="col-xs-4 robot-part">
            <a href="/parts/onePart/{headID}">
            <img src="/assets/img/parts/{headImg}" width="50%" height="50%"/></br>
        {head} ({headID})</a>
    </div>
    <div class="col-xs-4 robot-part">
            <a href="/parts/onePart/{torsoID}">
            <img src="/assets/img/parts/{torsoImg}" width="50%" height="50%"/></br>
        {torso} ({torsoID})</a>
    </div>
    <div class="col-xs-4 robot-part">
            <a href="/parts/onePart/{bottomID}">
            <img src="/assets/img/parts/{bottomImg}" width="50%" height="50%"/></br>
        {bottom} ({torsoID})</a>
    </div>
{/robots}
</div>
