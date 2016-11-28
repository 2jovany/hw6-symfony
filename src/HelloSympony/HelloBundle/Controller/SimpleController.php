<?php

namespace HelloSympony\HelloBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SimpleController extends Controller
{
	/**
	 * @param $name
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

	/**
	 * @return Response
	 */
    public function aboutAction()
    {
    	return new Response(
    		'<html><body>Simple Response? Ok!</body></html>'
	    );

    }

	/**
	 * @param $id
	 * @return Response
	 */
    public function slugAction($id)
    {
    	return new Response(
    		'<html><body>I got param: '.$id.'</body></html>'
	    );
    }

	/**
	 * @param $lang
	 * @param $page
	 * @param $id
	 * @param $article
	 * @return Response
	 */
    public function moduleAction($lang, $page, $id, $article)
    {
    	return new Response(
    	    '<html>
			<body>
				<table>
						<tr>
							<th>Language:</th><td>'.$lang.'</td>
						</tr>	
						<tr>
							<th>Page:</th><td>'.$page.'</td>
						</tr>	
						<tr>
							<th>Id:</th><td>'.$id.'</td>
						</tr>	
						<tr>
							<th>Article:</th><td>'.$article.'</td>
						</tr>	
						
				</table>
			</body>
			</html>'
	    );
    }
}
