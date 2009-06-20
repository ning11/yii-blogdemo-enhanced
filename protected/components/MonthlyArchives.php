<?php
  // @version $Id$
class MonthlyArchives extends Portlet
{
  public $title='Monthly Archives';

  public function findAllPostDate()
  {
    $yearmonth = array();
    $posts = Post::model()->findRecentPosts(PHP_INT_MAX);

    foreach ($posts as $post) {
      $ym = date('M Y', $post->createTime);
      if (!isset($yearmonth[$ym])) {
	$yearmonth[$ym] = 1;
      } else {
	$yearmonth[$ym]++;
      }
    }
    return $yearmonth;
  }


  protected function renderContent()
  {
    $this->render('monthlyArchives');
  }

}
