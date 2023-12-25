<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {

    /**
     * @Route("/", name="home_index"),
     * @Route("/index")
     */
    public function index() {

        return $this->render("base.html.twig");
    }
    /**
     * @Route("/check", name="check"),
     */
    public function check() {
            return $this->json(floatval(trim(shell_exec("sensors -u | grep temp1_input | awk '/temp1_input/ {print $2; exit}'"))));
        }
    }