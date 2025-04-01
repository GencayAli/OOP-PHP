<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linie</title>
</head>
<body>
    <?php 
    include_once "u_oop_punkt.inc.php";
class Linie {
    public Punkt $start;
    public Punkt $ende;

    public function __constructur(Punkt $start = null, Punkt $ende =null){
        $this->start = $start ?? new Punkt();
        $this->ende = $ende ?? new Punkt();
    }

    public function verschieben(float $dx, float $dy): void {
        $this->start->verschieben($dx, $dy);
        $this->ende->verschieben($dx, $dy);
    }

    public function __toString(): string {
        return "$this->start / $this->ende";
    }
}
    ?>
</body>
</html>