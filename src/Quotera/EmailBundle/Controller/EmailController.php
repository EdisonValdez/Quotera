<?php

namespace Quotera\EmailBundle\Controller;

use Quotera\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller as BaseController;
use Quotera\EmailBundle\Entity\Email;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Quotera\EmailBundle\Form\EmailType;
use Symfony\Component\HttpFoundation\Request;
//use Quotera\UserBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Quotera\UserBundle\Entity\userInfo;


/**
 * Class EmailController
 * @package Quotera\EmailBundle\Controller
 *
 */
class EmailController extends BaseController {

    /**
     * @Template()
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        if(!$this->getUser())
            $this->enforceUserSecurity('IS_AUTHENTICATED_ANONYMOUSLY');
        return $this->render('EmailBundle:Email:index.html.twig');
    }

    /**
     * @param Request $request
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/", name="/email")
     * @Template()
     */
    public function EmailAction(Request $request)
    {
        //$this->enforceUserSecurity('ROLE_USER');
        $email = new Email();
        $form = $this->createForm(new EmailType());
        if ($request->isMethod('POST')) {
            $form->submit($request);

            if ($form->isValid()) {
                $user = $this->getUser();
                $email->setOwner($user);
                //$email = new Email();
                $email->setName($user);
                $email->setTracking(rand(100000,30000000));
                $email->setCategory($form->get('category')->getData());
                $email->setCity($form->get('city')->getData());
                $email->setMessage($form->get('message')->getData());
                $email->setProduct($form->get('product')->getData());
                $email->setQuantity($form->get('quantity')->getData());
                $email->setQtyType($form->get('qtyType')->getData());
                $email->setFile($form->get('file')->getData());
                $email->setImage($email->getWebPath());
                $email->setIp($request->getClientIp());
                $email->setQuotationSender($user);
                $email->setCaptcha($form->get('captcha')->getData());
                $email->setUsername($form->get('username')->getData());
                $email->setMessageId($email->getTracking());
                $email->setEmail("evaldez@bullatickets.com");
                $email->setEmailTo("iancasillasbuffon@gmail.com");
                $email->setTime($form->get('time')->getData());

                $em = $this->getDoctrine()->getManager();

                $em->persist($email);
                $em->flush();

                $message = \Swift_Message::newInstance()
                    ->setSubject($form->get('product')->getData())
                    ->setFrom('evaldez@bullatickets.com')
                    ->setTo('iancasillasbuffon@gmail.com')
                    ->setCharset('utf-8')
                    ->setContentType('text/html')
                    ->setBody('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <!-- If you delete this tag, the sky will fall on your head -->
    <meta name="viewport" content="width=device-width" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>QUOTTY</title>

    <style>
    /* -------------------------------------
            GLOBAL
    ------------------------------------- */
    * {
        margin:0;
        padding:0;
    }
    * { font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; }

    img {
        max-width: 100%;
    }
    .collapse {
        margin:0;
        padding:0;
    }
    body {
        -webkit-font-smoothing:antialiased;
        -webkit-text-size-adjust:none;
        width: 100%!important;
        height: 100%;
    }


    /* -------------------------------------
            ELEMENTS
    ------------------------------------- */
    a { color: #2BA6CB;}

    .btn {
        text-decoration:none;
        color: #FFF;
        background-color: #666;
        padding:10px 16px;
        font-weight:bold;
        margin-right:10px;
        text-align:center;
        cursor:pointer;
        display: inline-block;
    }

    p.callout {
        padding:15px;
        background-color:#ECF8FF;
        margin-bottom: 15px;
    }
    .callout a {
        font-weight:bold;
        color: #2BA6CB;
    }

    table.social {
        /* 	padding:15px; */
        background-color: #ebebeb;

    }
    .social .soc-btn {
        padding: 3px 7px;
        font-size:12px;
        margin-bottom:10px;
        text-decoration:none;
        color: #FFF;font-weight:bold;
        display:block;
        text-align:center;
    }
    a.fb { background-color: #3B5998!important; }
    a.tw { background-color: #1daced!important; }
    a.gp { background-color: #DB4A39!important; }
    a.ms { background-color: #000!important; }

    .sidebar .soc-btn {
        display:block;
        width:100%;
    }

    /* -------------------------------------
            HEADER
    ------------------------------------- */
    table.head-wrap { width: 100%;}

    .header.container table td.logo { padding: 15px; }
    .header.container table td.label { padding: 15px; padding-left:0px;}


    /* -------------------------------------
            BODY
    ------------------------------------- */
    table.body-wrap { width: 100%;}


    /* -------------------------------------
            FOOTER
    ------------------------------------- */
    table.footer-wrap { width: 100%;	clear:both!important;
    }
    .footer-wrap .container td.content  p { border-top: 1px solid rgb(215,215,215); padding-top:15px;}
    .footer-wrap .container td.content p {
        font-size:10px;
        font-weight: bold;

    }


    /* -------------------------------------
            TYPOGRAPHY
    ------------------------------------- */
    h1,h2,h3,h4,h5,h6 {
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; line-height: 1.1; margin-bottom:15px; color:#000;
    }
    h1 small, h2 small, h3 small, h4 small, h5 small, h6 small { font-size: 60%; color: #6f6f6f; line-height: 0; text-transform: none; }

    h1 { font-weight:200; font-size: 44px;}
    h2 { font-weight:200; font-size: 37px;}
    h3 { font-weight:500; font-size: 27px;}
    h4 { font-weight:500; font-size: 23px;}
    h5 { font-weight:900; font-size: 17px;}
    h6 { font-weight:900; font-size: 14px; text-transform: uppercase; color:#444;}

    .collapse { margin:0!important;}

    p, ul {
        margin-bottom: 10px;
        font-weight: normal;
        font-size:14px;
        line-height:1.6;
    }
    p.lead { font-size:17px; }
    p.last { margin-bottom:0px;}

    ul li {
        margin-left:5px;
        list-style-position: inside;
    }

    /* -------------------------------------
            SIDEBAR
    ------------------------------------- */
    ul.sidebar {
        background:#ebebeb;
        display:block;
        list-style-type: none;
    }
    ul.sidebar li { display: block; margin:0;}
    ul.sidebar li a {
        text-decoration:none;
        color: #666;
        padding:10px 16px;
        /* 	font-weight:bold; */
        margin-right:10px;
        /* 	text-align:center; */
        cursor:pointer;
        border-bottom: 1px solid #777777;
        border-top: 1px solid #FFFFFF;
        display:block;
        margin:0;
    }
    ul.sidebar li a.last { border-bottom-width:0px;}
    ul.sidebar li a h1,ul.sidebar li a h2,ul.sidebar li a h3,ul.sidebar li a h4,ul.sidebar li a h5,ul.sidebar li a h6,ul.sidebar li a p { margin-bottom:0!important;}



    /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
    .container {
        display:block!important;
        max-width:600px!important;
        margin:0 auto!important; /* makes it centered */
        clear:both!important;
    }

    /* This should also be a block element, so that it will fill 100% of the .container */
    .content {
        padding:15px;
        max-width:600px;
        margin:0 auto;
        display:block;
    }


    .content table { width: 100%; }


    /* Odds and ends */
    .column {
        width: 300px;
        float:left;
    }
    .column tr td { padding: 15px; }
    .column-wrap {
        padding:0!important;
        margin:0 auto;
        max-width:600px!important;
    }
    .column table { width:100%;}
    .social .column {
        width: 280px;
        min-width: 279px;
        float:left;
    }

    /* Be sure to place a .clear element after each set of columns, just to be safe */
    .clear { display: block; clear: both; }


    /* -------------------------------------------
            PHONE
            For clients that support media queries.
            Nothing fancy.
    -------------------------------------------- */
    @media only screen and (max-width: 600px) {

        a[class="btn"] { display:block!important; margin-bottom:10px!important; background-image:none!important; margin-right:0!important;}

        div[class="column"] { width: auto!important; float:none!important;}

        table.social div[class="column"] {
            width:auto!important;
        }

    }
    </style>

    </head>

    <body bgcolor="#FFFFFF">

    <!-- HEADER -->
    <table class="head-wrap" bgcolor="#0072C6">
        <tr>
            <td></td>
            <td class="header container">

                <div class="content">
                    <table bgcolor="#0072C6">
                        <tr>
                            <td><img src="http://bullatickets.com/quotty/assets/assets/images/logo_small.png" /></td>
                            <td align="right"><h6 class="collapse" style="color:#fff;">Please Send me a Quotation Now!</h6></td>
                        </tr>
                    </table>
                </div>

            </td>
            <td></td>
        </tr>
    </table><!-- /HEADER -->


    <!-- BODY -->
    <table class="body-wrap">
        <tr>
            <td></td>
            <td class="container" bgcolor="#FFFFFF">

                <div class="content">
                    <table>
                        <tr>
                            <td>

                                <h3>Hello!</h3>

                                <center><h3>QUOTATION REQUEST for <i>' .$form->get('product')->getData().'  </i></H3></center>
                                <br>
                                <p class="lead">One of our member need a quotation of a product or a service:</p>
                                Our Member <h3>'. $form->get('username')->getData() .'</h3> Is requesting a quotation from suppliers near :<b>'.$form->get('city')->getData().'</b>
                                <br />

                                <table width="90%"  class="column" style="color:#000; text-align:center;" align="center">
                                    <tr><td colspan="3"><h4>SUBJECT: '.$form->get('product')->getData().' - QUOTATION NO: QUOTTY'.$form->get('tracking')->getData().'</h4></td></tr>

                                    <tr style="background:#ccc;"><td><strong>QUANTITY</strong></td><td><strong>PRODUCT OR SERVICE</strong></td>
                                        <td><strong>DETAILED DESCRIPTION</strong></td></tr>
                                    <tr><td><b>'.$form->get('quantity')->getData().'  '.$form->get('qtyType')->getData().'</b></td>
                                        <td> <b>'.$form->get('product')->getData().'</b></td><td>'. $form->get('message')->getData().'<br><img src="' . $email->getImage().'" width="150px" height="auto"/><br>'.$email->getWebPath().'</td></tr>



                                </table>


                                <br>
                                <p>Quotty Helps thousand of people to get their quotation in just one single Email!</p>

                                <a class="btn">Reply this Quotation!</a>

                                <br/>
                                <br/>
                                <!-- Callout Panel -->
                                <p class="callout">
                                    QUOTTY is an application who helps business and person from all over the country doing Business as easiest as never before!. <a href="http://bullatickets.com/quotty/">Go Quotty! &raquo;</a>
                                </p><!-- /Callout Panel -->
                                <!-- social & contact -->
                                <table class="social" width="100%">
                                    <tr>
                                        <td>

                                            <!--- column 1 -->
                                            <table align="left" class="column">
                                                <tr>
                                                    <td>

                                                        <h5 class="">Connect with Us:</h5>
                                                        <p class=""><a href="#" class="soc-btn fb">Facebook</a> <a href="#" class="soc-btn tw">Twitter</a> <a href="#" class="soc-btn gp">Google+</a></p>


                                                    </td>
                                                </tr>
                                            </table><!-- /column 1 -->

                                            <!--- column 2 -->
                                            <table align="left" class="column">
                                                <tr>
                                                    <td>

                                                        <h5 class="">Contact Info:</h5>
                                                        <p>Phone: <strong>408.341.0600</strong><br/>
                                                            Email: <strong><a href="emailto:hey@quotty.com">hey@quotty.com</a></strong></p>

                                                    </td>
                                                </tr>
                                            </table><!-- /column 2 -->

                                            <span class="clear"></span>

                                        </td>
                                    </tr>
                                </table><!-- /social & contact -->


                            </td>
                        </tr>
                    </table>
                </div>

            </td>
            <td></td>
        </tr>
    </table><!-- /BODY -->

    <!-- FOOTER -->
    <table class="footer-wrap">
        <tr>
            <td></td>
            <td class="container">

                <!-- content -->
                <div class="content">
                    <table>
                        <tr>
                            <td align="center">
                                <p>
                                    <a href="#">Terms</a> |
                                    <a href="#">Privacy</a> |
                                    <a href="#"><unsubscribe>Unsubscribe</unsubscribe></a>
                                </p>
                            </td>
                        </tr>
                    </table>
                </div><!-- /content -->

            </td>
            <td></td>
        </tr>
    </table><!-- /FOOTER -->

    </body>
    </html>
', 'text/html'
                    );
                $this->get('mailer')->send($message);
                $request->getSession()->getFlashBag()->add('success', 'Your quotation has been sent' );
                // return $this->redirect($this->generateUrl('formEmail'));
            }
        }
        return array(
            'form' => $form->createView()
        );
    }

    public function sendMailAction(){
        return $this->render("EmailBundle:Email:sendMail.html.twig");

    }

    public function getUserEmail(User $user)
    {
        $em = $this->getDoctrine()->getManager();
        $user_email = $em->getRepository('UserBundle:User')
            ->find($user->setEmail($user->getEmail()));

        return $user_email;
    }


    private function enforceUserSecurity($role = 'ROLE_USER')
    {
        if(!$this->container->get('security.context')->isGranted($role))
        {
            // Symfony 2.5
            // throw $this->createAccessDeniedException('Need ROLE_ADMIN');
            throw new AccessDeniedException('Need '.$role);
        }
    }

    private function enforceOwnerSecurity(Email $email)
    {
        $user = $this->getUser();

        if($user != $email->getOwner())
        {
            throw new AccessDeniedException('You are not the owner!');
        }

    }



}

