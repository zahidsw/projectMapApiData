<?php

namespace ApiMaps\ApiMapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ApiMaps\ApiMapBundle\Entity\Logindata;
use ApiMaps\ApiMapBundle\Entity\Mappaths;
use ApiMaps\ApiMapBundle\Entity\Traveltime;
use ApiMaps\ApiMapBundle\Entity\Unitids;
use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class DefaultController extends Controller {

    public function indexAction(Request $request) {
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $reposity = $em->getRepository('ApiMapBundle:Logindata');

        if ($request->getMethod() == 'POST') {
            $session->clear();
            $user = $request->get('username');
            $passward = $request->get('passward');
            $remember = $request->get('remember');

            $userdata = $reposity->findOneBy(array('name' => $user, 'passward' => $passward));
            if ($userdata) {
                if ($remember === 'remember-me') {
                    $login = new Logindata();
                    $login->setName($user);
                    $login->setPassward($passward);
                    $session->set('login', $login);
                }
                return $this->render('ApiMapBundle:Default:welcome.html.twig', array('name' => $userdata->getName()));
            } else {
                return $this->render('ApiMapBundle:Default:login.html.twig', array('name' => 'Login Error Try again...'));
            }
        } else {
            if ($session->has('login')) {
                $login = $session->get('login');
                $username = $login->getName();
                $passward = $login->getPassward();
                $userdata = $reposity->findOneBy(array('name' => $username, 'passward' => $passward));
                if ($userdata) {
                    $unitids_data = $this->getTableEnteries();

                    return $this->render('ApiMapBundle:Default:welcome.html.twig', array('name' => $userdata->getName(), 'unitsids' => $unitids_data));
                }
            }
        }
        return $this->render('ApiMapBundle:Default:login.html.twig');
    }

    public function toString($data) {
        if (is_array($data)) {
            return '';
        }
        return $data;
    }

    public function getTableEnteries() {

        $em = $this->getDoctrine()->getManager();
        $units_ids = $em->createQueryBuilder();
        $units_ids->select('units.databaseid');
        $units_ids->from('ApiMapBundle:Unitids', 'units');
        $results = $units_ids->getQuery()->getArrayResult();
        return $results;
    }

    public function getDatesEnteries() {

        $em = $this->getDoctrine()->getManager();
        $units_ids = $em->createQueryBuilder();
        $units_ids->select('units.databaseid');
        $units_ids->from('ApiMapBundle:Unitids', 'units');
        $results = $units_ids->getQuery()->getArrayResult();
        return $results;
    }

    public function getTableData() {
        $em = $this->getDoctrine()->getManager();
        $units_ids = $em->createQueryBuilder();
        $units_ids->select('units.databaseid');
        $units_ids->from('ApiMapBundle:Unitids', 'units');
        $results = $units_ids->getQuery()->getResult();
        return $results;
    }

    public function signupAction(Request $request) {
        print_r($request);
        if ($request->getMethod() == 'POST') {
            
        }
        return $this->render('ApiMapBundle:Default:signup.html.twig');
    }

    public function logoutAction(Request $request) {
        $session = $request->getSession();
        $session->clear();
        return $this->render('ApiMapBundle:Default:login.html.twig');
    }

    public function populationAction(Request $request) {
        
        //$formFactory = Forms::createFormFactory();
        //  print_r($request->get('source'));
            // just setup a fresh $task object (remove the dummy data)
    $task = new Task();

    $form = $this->createFormBuilder($task)
        ->add('task', TextType::class)
        ->add('dueDate', DateType::class)
        ->add('save', SubmitType::class, array('label' => 'Create Task'))
        ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // ... perform some action, such as saving the task to the database

        return $this->redirectToRoute('task_success');
    }

    return $this->render('default/new.html.twig', array(
        'form' => $form->createView(),
    ));
        print_r($form->handleRequest($request));
        // print_r($request->get('destination'));
        die();
        $em = $this->getDoctrine()->getManager();
        //  $tableData = $em->createQueryBuilder();
        //$query = $tableData->setParameter('source', 1);
        //$query = $tableData->setParameter('destination', 50);
        /* $results = $tableData->select('units,units1,paths')
          ->from('ApiMapBundle:Traveltime', 'time')
          ->leftJoin('ApiMapBundle:Mappaths', 'paths', 'WITH', $tableData->expr()->eq('time.refMapPath', 'paths.id'))
          //->addSelect('paths')
          ->leftJoin('ApiMapBundle:Unitids', 'units', 'WITH', $tableData->expr()->eq('paths.refUnitids2', 'units.id'))
          //->addSelect('paths1')
          ->leftJoin('ApiMapBundle:Unitids', 'units1', 'WITH', $tableData->expr()->eq('paths.refUnitids1', 'units1.id'))
          ->andWhere('units.databaseid= :id1')
          ->andWhere('units1.databaseid=:id2')
          ->setParameter('id1', 50)
          ->setParameter('id2', 1)
          ->getQuery()
          ->setMaxResults(2)
          ->getResult(); */
        //$result =$em->
        /*     $qb = $em->createQueryBuilder();
          //  $query = $qb->setParameter('tt', $cn);
          $query = $qb->select('time')
          ->from('ApiMapBundle:Traveltime', 'time')
          // ->from('ApiMapBundle:Mappaths', 'p')
          // ->from('ApiMapBundle:Unitids', 'u11')
          ->leftjoin('ApiMapBundle:Mappaths', 'path', 'WITH', 'time.refMapPath=path.id')
          ->leftjoin('ApiMapBundle:Unitids', 'u2', 'WITH', 'path.refUnitids2= u2.id')
          ->leftjoin('ApiMapBundle:Unitids', 'u1', 'WITH', 'path.refUnitids1= u1.id')
          ->where('u2.databaseid = :bdatabaseid')
          ->setParameter('bdatabaseid', 2)
          ->andwhere('u1.databaseid = :bdatabaseid1')
          ->setParameter('bdatabaseid1', 1)
          ->getQuery()
          ->getResult();
         */
        $em = $this->getDoctrine()->getManager();
        // $query = $em->getRepository('ApiMapBundle:Traveltime')->createQueryBuilder('t');
        // $query->select('t')
        $query = $em->createQueryBuilder();
        $results = $query->select('t.id,t.traveltime,t.noobjs,t.ondate')
                ->from('ApiMapBundle:Traveltime', 't')
                ->leftJoin('t.refMapPath', 'p')
                ->leftJoin('p.refUnitids2', 'un')
                ->leftJoin('p.refUnitids1', 'un1')
                ->where('un.databaseid = :bdatabaseid1')
                ->setParameter('bdatabaseid1', 1)
                ->andwhere('un1.databaseid = :bdatabaseid2')
                ->setParameter('bdatabaseid2', 2)
                // ->setMaxResults(2)
                ->getQuery()
                ->getResult();
        print_r($results);
        /*

          print_r($results);

          //$tableData = $em->createQueryBuilder();
          //$query = $tableData->setParameter('source', 1);
          //$query = $tableData->setParameter('destination', 50);
          $em = $this->getDoctrine()->getManager();
          /*       $results = $em->createQuery('SELECT t.ID, t.ondate, un.databaseid as source1, un1.databaseid as desitnation, t.traveltime, t.noobjs
          FROM ApiMapBundle:Traveltime t
          left join ApiMapBundle:Mappaths p WITH t.refMapPath
          left join ApiMapBundle:Unitids un WITH p.refUnitids2
          left join ApiMapBundle:Unitids un1 WITH p.refUnitids1
          where un.databaseid = 50 and un1.databaseid = 1 limit 1' );
          $results1= $results->getResult();
          print_r($results1);
         */
        /*
         *      $results = $tableData->select('units.databaseid,units1.databaseid')
          ->from('ApiMapBundle:Traveltime', 'time')
          ->leftJoin('ApiMapBundle:Mappaths', 'paths')
          //->addSelect('paths')
          ->leftJoin('ApiMapBundle:Unitids', 'units')
          //->addSelect('paths1')
          //  ->Join('ApiMapBundle:Unitids', 'units1')
          ->andWhere('units.databaseid= :id1')
          ->andWhere('units1.databaseid=:id2')
          ->setParameter('id1', 50)
          ->setParameter('id2', 1)
          ->getQuery()
          ->setMaxResults(2)
          ->getResult();
          print_r($results);
         */
        die();

        //->addWhere()
        // ->addWhere()
        /*       $qb = $em->createQueryBuilder();
          $query = $qb->setParameter('tt', $cn);
          $query = $qb->select('u1.id', 'u1.unitid')
          ->from('ApiMapBundle:traveltime', 't1')
          // ->from('ApiMapBundle:Unitids', 'u11')
          ->join('ApiMapBundle:Unitids', 'u1', 'WITH', $qb->expr()->orX('m1.refUnitids2 =u1.id', 'm1.refUnitids1 = u1.id'))
          ->andWhere('m1.id=:tt')
          //->andWhere('u1.id=m1.refUnitids2')
          //->andWhere('u1.id=m1.refUnitids1')
          ->setParameter('tt', $cn)
          ->getQuery()
          ->getResult();
         */
        //    $session = $request->getSession();
        $session->clear();
        return $this->render('ApiMapBundle:Default:login.html.twig');
    }

}
