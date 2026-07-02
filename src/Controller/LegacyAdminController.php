<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

class LegacyAdminController extends AbstractController
{
    #[Route('/admin', name: 'legacy_admin_redirect')]
    #[Route('/admin/', name: 'legacy_admin_redirect_slash')]
    public function __invoke(): RedirectResponse
    {
        return $this->redirectToRoute('admin');
    }
}
