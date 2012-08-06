<?php include('application/views/template/top.php'); ?>

	<form action="/order/start">
		<fieldset>
			<legend>OTOCO Order Tool</legend>
			<ol>
				<li>
					<label for="limit">Stock Limit</label>
					$<input type="text" name="limit" value="500.00" />
				</li>
				<li>
					<label for="loss">Loss Margin</label>
					<input type="text" name="loss" value="20" />%
				</li>
				<li>
					<label for="gain">Gain Margin</label>
					<input type="text" name="gain" value="20" />%
				</li>
				<li>
					<label for="stock">Stock Symbol</label>
					<input type="text" name="stock" value="GOOG" />
				</li>
				<li>
					<label for="commission">Broker Commission</label>
					$<input type="text" name="commission" value="3.95" />
				</li>
				<li>
					<button type="submit">Process</button>
				</li>
			</ol>
		</fieldset>
	</form>

<?php include('application/views/template/bottom.php'); ?>