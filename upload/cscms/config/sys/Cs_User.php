<?php
define('User_Mode',1);      //会员开关  
define('User_No_info','会员功能已经关闭'); //会员关闭提示
define('User_Ym','');      //会员板块绑定域名 
define('User_Code_Mode',1); //会员验证码开关  
define('User_Logo',0);      //强制头像开关  
define('User_Tel',0);      //手机强制验证
define('User_BookFun',1);      //网站留言开关  
define('User_YkDown',0);      //游客下载开关  
define('User_Uc_Mode',0);      //UC整合开关 
define('User_Uc_Fun',0);        //UC整合会员是否需要激活 
define('User_Downtime',24);    //重复扣币间隔小时  
define('User_DownFun',1);      //分成比列开关  
define('User_Downcion',30);     //默认分成比列数量  
define('User_Reg',1);      //会员注册开关  
define('User_RegZw',0);      //用户名中文开关  
define('User_Regxy','当您申请用户时，表示您已经同意遵守本规章。 欢迎您加入本站点参加交流和讨论，本站点为公共论坛，为维护网上公共秩序和社会稳定，请您自觉遵守以下条款： &lt;br&gt;一、不得利用本站危害国家安全、泄露国家秘密，不得侵犯国家社会集体的和公民的合法权益，不得利用本站制作、复制和传播下列信息： &lt;br&gt;（一）煽动抗拒、破坏宪法和法律、行政法规实施的；（二）煽动颠覆国家政权，推翻社会主义制度的；&lt;br&gt;（三）煽动分裂国家、破坏国家统一的；&lt;br&gt;（四）煽动民族仇恨、民族歧视，破坏民族团结的；&lt;br&gt;（五）捏造或者歪曲事实，散布谣言，扰乱社会秩序的；&lt;br&gt;（六）宣扬封建迷信、淫秽、色情、赌博、暴力、凶杀、恐怖、教唆犯罪的；&lt;br&gt;（七）公然侮辱他人或者捏造事实诽谤他人的，或者进行其他恶意攻击的；&lt;br&gt;（八）损害国家机关信誉的；&lt;br&gt;（九）其他违反宪法和法律行政法规的；&lt;br&gt;（十）进行商业广告行为的。&lt;br&gt;二、互相尊重，对自己的言论和行为负责。&lt;br&gt;三、禁止在申请用户时使用相关本站的词汇，或是带有侮辱、毁谤、造谣类的或是有其含义的各种语言进行注册用户，否则我们会将其删除。&lt;br&gt;四、禁止以任何方式对本站进行各种破坏行为。&lt;br&gt;五、如果您有违反国家相关法律法规的行为，本站概不负责，您的登录论坛信息均被记录无疑，必要时，我们会向相关的国家管理部门提供此类息。 ');      //会员注册协议  
define('User_Reg_Name','创始人,管理员,版主,斑竹,chengshi,chshcms,packs,cscms,chshdj,chshdjcms,848769359');  //禁用用户名/昵称 
define('User_RegMsgFun',0);      //发送欢迎信息
define('User_RegIP',0);      //同一IP注册限制小时  
define('User_RegFun',0);      //新用户注册人工审核,1需要审核  
define('User_RegEmailFun',0);      //新用户邮件激活,1需要激活  
define('User_RegEmailContent','尊敬的{cscms:user}，&lt;br/&gt;欢迎你注册成为{cscms:webname}的会员！&lt;br/&gt;请点击下面的链接进行帐号的激活：&lt;br/&gt;{cscms:url}&lt;br/&gt;如果不能点击链接，请复制到浏览器地址输入框访问。&lt;br/&gt;&lt;br/&gt;{cscms:webname}&lt;br/&gt;{cscms:time}'); //注册激活邮件内容
define('User_RegMsgContent','尊敬的{cscms:user}，&lt;br/&gt;欢迎你注册成为{cscms:webname}的会员！&lt;br/&gt;&lt;br/&gt;本站全体管理人员向您问好！&lt;br/&gt;{cscms:webname}'); //欢迎邮件内容不够
define('User_PassContent','尊敬的{cscms:user}，这是来自{cscms:webname}的密码重置邮件。点击下面的链接重置您的密码：&lt;br/&gt;{cscms:url}&lt;br/&gt;二小时内有效，如非本人操作，请忽略，&lt;br/&gt;如果链接无法点击，请将链接粘贴到浏览器的地址栏中访问。&lt;br/&gt;{cscms:webname} &lt;br/&gt;{cscms:time}');  //密码找回邮件内容
define('User_Dtts',30);      //动态保留数，0为全部保留
define('User_Fkts',100);      //访客保留数，0为全部保留 
define('User_Hyts',100);      //好友保留数，0为全部保留  
define('User_Fsts',100);      //粉丝保留数，0为全部保留   
define('User_Ssts',10);      //说说保留数，0为全部保留   
define('User_RmbToCion',1); //默认金币比例  
define('User_Cion_Reg',0);      //注册赠送金币  
define('User_Cion_Log',0);      //登入赠送金币  
define('User_Cion_Qd',0);      //签到赠送金币
define('User_Cion_Logo',1);      //上传头像赠送金币
define('User_Cion_Add',1);      //发表数据赠送金币
define('User_Cion_Zx',0);      //在线1小时赠送金币
define('User_Cion_Del',1);      //数据删除扣除金币
define('User_Jinyan_Reg',200);      //注册赠送经验
define('User_Jinyan_Log',0);      //登入赠送经验
define('User_Jinyan_Qd',100);      //签到赠送经验
define('User_Jinyan_Logo',100);      //上传头像赠送经验
define('User_Jinyan_Add',100);      //发表数据赠送经验
define('User_Jinyan_Zx',10);      //在线1小时赠送经验
define('User_Jinyan_Del',100);      //数据删除扣除经验
define('User_Cion_Share',0);      //每次分享奖励金币
define('User_Jinyan_Share',10);      //每次分享奖励经验
define('User_Nums_Share',10);      //每天分享奖励次数
define('User_Nums_Add',10);      //每天发表数据奖励次数
define('User_Skins','');      //会员默认模板路径