<?php
class Slider extends Connect
{
    public function getAllSlider()
    {
        $sql = "SELECT * from Sliders;";
        return $this->conn->query($sql);
    }
}
