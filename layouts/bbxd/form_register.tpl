	<table class="outline margin form form_register">
		<tr class="header1">
			<th colspan=2>Register</th>
		</tr>
		<tr>
			<td class="cell2 center" style="width:20%;">
				User name
			</td>
			<td class="cell0">
				{$fields.username}
			</td>
		</tr>
		<tr>
			<td class="cell2 center">
				Password
			</td>
			<td class="cell1">
				{$fields.password} | Confirm: {$fields.password2}
			</td>
		</tr>
		<tr>
			<td class="cell2 center">
				Email address
			</td>
			<td class="cell0">
				{$fields.email}
			</td>
		</tr>
		<tr>
			<td class="cell2 center">
				Gender
			</td>
			<td class="cell1">
				{$fields.sex}
			</td>
		</tr>
		<tr style="display:none;">
			<td class="cell2 center">
				Bot Protection
			</td>
			<td class="cell1">
				{$fields.botprot}
			</td>
		</tr>
		<tr>
			<td class="cell2"></td>
			<td class="cell0">
				{$fields.readfaq}
			</td>
		</tr>
		<tr class="cell2">
			<td></td>
			<td>
				{$fields.btnRegister}
				{$fields.autologin}
			</td>
		</tr>
		<tr>
			<td colspan="2" class="cell0 smallFonts">
				Specifying an email address is a requirement because it will allow you to reset your password should you forget it. By default, your email is made private.
			</td>
		</tr>
	</table>

	<script src=\"".resourceLink('js/register.js')."\"></script>
<script src=\"".resourceLink('js/zxcvbn.js')."\"></script>