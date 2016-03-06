<?php
/**
 *Te响应式主题 : Themia，一款个性化十分丰富，附加功能非常全面，自定义字段非常屌的华丽的响应式模板。
 * 
 * @package Themia
 * @author Jrotty
 * @version 2.4.0
 * @link http://qqdie.com
 */
?>
  <?php $this->need('header.php'); ?>
 <header id="header" data-behavior="<?php $this->options->css(); ?>">
 <i id="btn-open-sidebar" class="fa fa-lg fa-bars"></i>
    <h1 class="header-title">
        <a class="header-title-link" href="<?php $this->options->siteUrl(); ?>" ><?php $this->options->title(); ?></a>
    </h1>
    
        
            <a  class="header-right-icon st-search-show-outputs"
                href="#about">
        
                <i class="fa fa-lg fa-search"></i>
            </a>
    
</header>

 <nav id="sidebar" data-behavior="<?php $this->options->css(); ?>">

<?php $this->need('sidebar.php'); ?>	  
<div id="main" data-behavior="<?php $this->options->css(); ?>"
                 class="
                        hasCoverMetaIn
                        ">            
            
<section class="postShorten-group main-content-wrap">
 
        <?php while($this->next()): ?>
        <?php if (!empty($this->options->sidebarBlock) && in_array('simg', $this->options->sidebarBlock)): ?>


     <article class="postShorten" itemscope itemType="http://schema.org/BlogPosting" id="article">  
<?php else: ?>
  <?php if (isset($this->fields->x)): ?>    
               <article class="postShorten" itemscope itemType="http://schema.org/BlogPosting" id="article">   

                       <?php else: ?><?php if (isset($this->fields->st)): ?>   <article class="postShorten" itemscope itemType="http://schema.org/BlogPosting" id="article">  <?php else: ?>
        <article class="postShorten postShorten--thumbnailimg" itemscope itemType="http://schema.org/BlogPosting" id="article">
              <?php endif; ?>  <?php endif; ?> 
                <?php endif; ?>     
      
            <div class="postShorten-wrap">
                <div class="postShorten-header">
                    <h1 class="postShorten-title" itemprop="headline">
                        
                                <a class="link-unstyled"  <?php if ($this->fields->l){ ?>href="<?php $this->fields->l(); ?>"  target="_blank"<?php }else{ ?>

href="<?php $this->permalink() ?>"<?php };?>><?php $this->title() ?></a>
                        
                    </h1>
                    <div class="postShorten-meta">
    <time itemprop="datePublished" content="<?php $this->date('Y-m-j  H:i'); ?>">
	
		     <?php $this->date('M d,Y'); ?>
    	
    </time>
    
      	  <span>in </span>
        
    <a class="category-link"><?php $this->category(','); ?></a>
<?php if ($this->options->jsq == '0'): ?><?php else: ?>
  <span>read (<?php if ($this->options->jsq == '1'): ?><?php get_post_view($this) ?><?php endif; ?><?php if ($this->options->jsq == '2'): ?><?php $this->viewsNum(); ?><?php endif; ?>)</span> 
<?php endif; ?>

<?php if($this->user->hasLogin()):?>
  <a href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid;?>" class="category-link"  target="_blank">编辑</a>
<?php endif;?>
    
</div>
                </div>
                <div class="postShorten-excerpt" itemprop="articleBody">        <?php if (!empty($this->options->sidebarBlock) && in_array('simg', $this->options->sidebarBlock)): ?>
<?php else: ?>
                 <?php if (isset($this->fields->st)): ?>   <p><img src="<?php showThumbnail($this); ?>" alt=""></p> <?php endif; ?> <?php endif; ?> 
                        <p>
<?php if (isset($this->fields->d)): ?><?php $this->fields->d(); ?>...
<?php else: ?>
     <?php $this->excerpt(140, '...'); ?> 
                <?php endif; ?> 
</p>
                    
                    
                        
                            <a  <?php if ($this->fields->l){ ?>href="<?php $this->fields->l(); ?>"  target="_blank"<?php }else{ ?>

href="<?php $this->permalink() ?>"<?php };?> class="postShorten-excerpt_link link ">Continue reading</a>
                            
                        

                   
                </div>
            </div>
            
             <?php if (!empty($this->options->sidebarBlock) && in_array('simg', $this->options->sidebarBlock)): ?>
<?php else: ?>
 <?php if (isset($this->fields->st)): ?>  <?php else: ?>
<?php if (isset($this->fields->x)): ?>    
          
                       <?php else: ?>
     
          
                <div class="postShorten-thumbnailimg">
                    <img alt="" itemprop="image" src="<?php showThumbnail($this); ?> "/>
                </div>
                <?php endif; ?>    <?php endif; ?> <?php endif; ?> 
                
            
        </article>
    
        
            <?php endwhile; ?> 
        
        
    
        
             

     
           
    
        
        <div class="pagination-bar">

    <ul class="pagination">
        
        <li class="pagination-prev">
    
            <?php $this->pageLink('<b class="btn btn--default btn--small">&nbsp;<i class="fa fa-angle-left text-base icon-mr"></i><span>Previous</span>&nbsp;  </b>','prev'); ?> 

                </li>
 
        <li class="pagination-next">        
  
<?php $this->pageLink('<b class="btn btn--default btn--small">&nbsp;<span>Next</span><i class="fa fa-angle-right text-base icon-ml"></i>&nbsp;</b>','next'); ?>      
        </li>
        
        <li class="pagination-number">page <?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?>  of <?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?></li>
    </ul>
</div>

</section>



	<?php $this->need('footer.php'); ?>