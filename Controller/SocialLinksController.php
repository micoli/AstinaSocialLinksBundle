<?php

namespace Astina\Bundle\SocialLinksBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class SocialLinksController
 *
 * @package   Astina\Bundle\SocialLinksBundle\Controller
 * @author    Drazen Peric <dperic@astina.ch>
 * @copyright 2014 Astina AG (http://astina.ch)
 */
class SocialLinksController extends Controller
{
    /**
     * @param array $options
     *
     * @return Response
     */
    public function socialLinkAction($options)
    {
        return $this->render('AstinaSocialLinksBundle:SocialLinks:socialLink.html.twig', array(
            'socialUrl'  => $options['socialUrl'],
            'attributes' => $options['attributes'],
            'linkText'   => $options['linkText']
        ));
    }

    /**
     * @param array $options
     *
     * @return Response
     */
    public function socialLinksAction($options)
    {
        return $this->render('AstinaSocialLinksBundle:SocialLinks:socialLinks.html.twig', array(
            'providers'  => $options['providers']
        ));
    }

}
