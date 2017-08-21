<?php
return array(
	//'配置项'=>'配置值'
	"Home" => [ 
	             "Common" => [
	                       // 'article' => 'datalist',
	                       // 'type' => 'datalist',
	                       // 'recovery' => 'datalist',
	             ],
	             "database" => [
	                       'blog-1' => [
	                                      'table' => "my_article_kevin",
                                          'alias' => 'a',
                                          'field' => ['(a.id*3600) as id', 'a.title', 'substring(a.article,1,100) as article', 'a.image', "from_unixtime(a.time,'%c月 %d,%Y') as time","(select count(id) from my_message_kevin m where  m.article_id=a.id) as comment" ],
                                          'order' => ["a.id" => 'desc'],
                                          'join'  => ["left join my_articlestate_kevin t on t.article_id=a.id"],
                                          'limit' => 5,
                                          'select' => [""],
	                       ],
	                       
	                       'post' => [
	                                      'table' => "my_article_kevin",
                                          'alias' => 'a',
                                          'field' => ['(a.id*3600) as id', 'a.title', 'a.article as article', 'a.image', "from_unixtime(a.time,'%c月 %d,%Y') as time","(select count(id) from my_message_kevin m where  m.article_id=a.id) as comment", ],
                                          'where' => ['a.id'=>$_GET['article']/3600],
                                          'order' => ["a.id" => 'desc'],
                                          'join'  => ["left join my_articlestate_kevin t on t.article_id=a.id"],
                         				  'find'  => [],
                         				  'other' => [
                         				  			   'table' =>'my_message_kevin',
                         				  			   'alias' => 'm',
                         				  			   'field' => ['id', 'name', "content", "from_unixtime(time,'%c月 %d,%Y') as time",],
                         				  			   'alias' => 'm',
                         				  			   'where' => ['m.article_id'=>$_GET['article']/3600],
                         				  			   'order' => ["id"=>'desc'],
                         				  			   'select'=> [],
                         				  			 ],
	                       ],

	                       // 'type'    =>[
                        //                   'table' => "my_menu_kevin",
                        //                   'field' => ['id', 'name', 'href', 'level'],
                        //                   'where' => ["id"=>["neq","0"],],
                        //                   'order' => ["id"=>'asc'],
                        //                   'select'=> "",
	                       // ],
	                       // 'recovery' => [
	                       //                'table' => "my_article_kevin",
                        //                   'alias' => 'a',
                        //                   'field' => ['a.id', 'a.title', 'substring(a.article,1,100)', 'a.image', "from_unixtime(a.time,'%Y年%c月%d日 %h时%i分%s秒')",],
                        //                   'where' => ["t.state" => ["neq","0"]],
                        //                   'order' => ["id" => 'asc'],
                        //                   'join'  => ["left join my_articlestate_kevin t on t.article_id=a.id"],
                        //                   'select' => [""],
	                       // ],
	                       // 'link'     => [
	                       //                'table' => "my_friendlylink_kevin",
                        //                   'alias' => 'a',
                        //                   'field' => ['id', 'friendname', 'img' ,'link'],
                        //                   'order' => ["id" => 'asc'],
                        //                   'select' => [""],
	                       // ],
	                       // 'user'     => [
	                       // 		          'table' => "my_user_kevin",
                        //                   'alias' => 'a',
                        //                   'field' => ['id', 'name', 'qq' ,'email',"gethub","self"],
                        //                   'where' => ['id'=>1],
                        //                   'find' => [""],
	                       // ],
	                       // 'leaving'  => [
	                       // 				  'table' => "my_message_kevin",
                        //                   'alias' => 'a',
                        //                   'field' => ['id', 'name', 'content' ,'level',"from_unixtime(a.time,'%Y年%c月%d日 %h时%i分%s秒')"],
                        //                   'select' => [""],
	                       // ],
	                       // 'web'  => [
	                       // 				  'table' => "my_site_kevin",
                        //                   'alias' => 'a',
                        //                   'field' => ['id', 'name', 'type' ,'self',"show"],
                        //                   'find' => [""],
	                       // ],
	                       // 'seo' => [
	                       // 				'table' => "my_site_kevin",
                        //                 'field' => ["id",'name','keywords','description'],  //匹配指定字段
	                       //              'create' => ["id" => "",],  //匹配关键字段
	                       //              'find'  => "",  //最终执行条件 

	                       // ],
	                       
	             ],
	             "Database_Suffix" => "_Kevin",
	             "Operation" => [
                          // 'article'=>[   
	                         //            "删除" => [
	                         //                   'table' => "my_articlestate_kevin",
                          //                      'field' => ["article_id", "id"],  //匹配指定字段
	                         //                   'data'  => ["state" => 1],   //所需修改值
	                         //                   'where' => ["article_id" => "",],  //匹配关键字段
	                         //                   'save'  => "",  //最终执行条件
	                         //            ]

                          //  ],
                          //  'link' => [
                          //  				"删除" => [
                          //                      'table' => "my_friendlylink_kevin",
                          //                      'field' => ["id"],  //匹配指定字段
	                         //                   'where' => ["id" => "",],  //匹配关键字段
	                         //                   'delete'  => "",  //最终执行条件 
                          //  				],
                          //  ], 
                          //  'leaving' => [
                          //  				"删除" => [
                          //                      'table' => "my_message_kevin",
                          //                      'field' => ["id"],  //匹配指定字段
	                         //                   'where' => ["id" => "",],  //匹配关键字段
	                         //                   'delete'  => "",  //最终执行条件 
                          //  				],
                          //  ],
                          //  'recovery'=>[
                          //               "恢复" =>  [
	                         //                   'table' => "my_articlestate_kevin",
                          //                      'field' => ["article_id", "id"],  //匹配指定字段
	                         //                   'data'  => ["state" => 0],   //所需修改值
	                         //                   'where' => ["article_id" => "",],  //匹配关键字段
	                         //                   'save'  => "",  //最终执行条件
	                         //            ],
                          //  ],
	              ],
	              'add'  =>[
                          'post'     => [
	                                      'table' => "my_message_kevin",
                                          'field' => ['name', 'email', 'content', 'level' ,'time' ,'article_id'],
                                          'create' => [],
                                          'add' => [""],
	                                    ],
	                        // 'user'    => [
	                       	// 	          'table' => "my_user_kevin",
                         //                  'field' => ['id', 'name', 'qq' ,'email',"gethub","self"],
                         //                  'where' => ['id'=>1],
                         //                  'create' => ['id'=>1],
                         //                  'save' => [""],
	                        //             ],
	                        // 'web'     => [
	                        // 				'table' => "my_site_kevin",
                         //                    'field' => ["id",'name','type','self','show'],  //匹配指定字段
	                        //                 'create' => ["id" => "",],  //匹配关键字段
	                        //                 'save'  => "",  //最终执行条件 
	                        //              ],
	                        // 'seo'     => [
	                        // 				'table' => "my_site_kevin",
                         //                    'field' => ["id",'name','keywords','description'],  //匹配指定字段
	                        //                 'create' => ["id" => "",],  //匹配关键字段
	                        //                 'save'  => "",  //最终执行条件 
	                        //              ],
	                       
	              ],
	             



             
	           ],
	          );