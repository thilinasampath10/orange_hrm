<?php


namespace App\Controller;
use App\Entity\Employeetable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Usertable;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;






class NewController extends AbstractController

{


    /**
     * @Route("/login")
     */
    public function login(Request $request){
        //$request->headers->set("Access-Control-Allow-Origin: *");
        //getting values from frontend
        $obj = json_decode($request->getContent(),true);
        $username = $obj['username'];
        $password = $obj['password'];

        //accessing database
        $user = $this->getDoctrine()->getRepository(Usertable::class)
            ->findOneBy([
                'username' => $username,
                'password1' => md5($password),
            ]);

        if($user){
            $isLoggedIn = true;
            $eId = $user->getEid();
        }else{
            $isLoggedIn = false;
            $eId = '';
        }

        $arr = array ('isLoggedIn'=>$isLoggedIn,'eId'=>$eId);
        $response = json_encode($arr);
        //$response->headers->set('Access-Control-Allow-Origin', '*');
        return new Response($response);
    }



    /**
     * @Route("/read")
     */
    public function read(Request $request) {
        $obj = json_decode($request->getContent(),true);
        $id = $obj['id'];
        $employee = $this->getDoctrine()->getRepository(Employeetable::class)->find($id);

        $first_name = $employee->getFirstname();
       $last_name = $employee->getLastname();
       $address = $employee->getAddress();

       $arr = array ('fname'=>$first_name,'lname'=>$last_name,'address'=>$address);
       $response = json_encode($arr);

        return new Response($response);
    }

}
