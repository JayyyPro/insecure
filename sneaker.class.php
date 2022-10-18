<?php
class Sneaker {
	private $_logo_carte;
	private $_nom_carte;
	private $_prix;

	private $_html;

	public function __construct($logocarte, $nomcarte, $prix)
	{
		$this->_logo_carte = $logocarte;
		$this->_nom_carte = $nomcarte;
		$this->_prix = $prix;

		$html = "<div class='carte'>";
		$html .= "<div class='logo-carte'><img src='sneakers-image/" . $logocarte . "' alt='image-sneakers'></div>";
		$html .= "<p class='nom-carte'>" . $nomcarte . "</p>";
		$html .= "<p class='prix'>" . $prix . "€</p>";
		$html .= "</div>";

		$this->_html = $html;
	}

	public function printHTML()
	{
		return $this->_html;
	}
}
?>