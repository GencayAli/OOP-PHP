<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Punkt
    {
        public float $x;
        public float $y;
    
        // Yapıcı metot (constructor)
        public function __construct(float $x = 0.0, float $y = 0.0)
        {
            $this->x = $x;
            $this->y = $y;
        }
    
        // Noktanın yazdırılabilir hali
        public function __toString(): string
        {
            return "( $this->x / $this->y)";
        }
    
        // Noktayı başka bir konuma kaydırır
        public function verschieben(float $dx, float $dy): void
        {
            $this->x += $dx;
            $this->y += $dy;
        }
    }
    ?>
</body>
</html>