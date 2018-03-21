<meta charset="utf-8"/>
<h1>Thực đơn</h1>
<form action="menu.php" method="GET">
<h3>Món khai vị</h3>
<select multiple name="main[]" size="4">
    <option value="Gỏi ngó sen">Gỏi ngó sen</option>
    <option value="Salat cá ngừ">Salat cá ngừ</option>
    <option value="Bò trộn rau thơm">Bò trộn rau thơm</option>
    <option value="Thịt nguội">Thịt nguội</option>
</select>

<h3>Món chính</h3>
<select multiple name="main[]" size="4">
    <option value="Bò Hầm">Bò Hầm</option>
    <option value="Cá chẽm sốt cà">Cá chẽm sốt cà </option>
    <option value="Tôm rang muối">Tôm rang muối</option>
    <option value="Cua sốt me">Cua sốt me</option>
</select>

<h3>Món tráng miệng</h3>
<select multiple name="main[]" size="3">
    <option value="Chè hạt sen">Chè hạt sen</option>
    <option value="Bánh flan">Bánh flan</option>
    <option value="Rau câu">Rau câu</option>
</select>
<br/><br/>
<input type="submit" name="submit"/>
</form>