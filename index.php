<?php include('php-parts/header.php'); ?>

    <script>
        $(document).ready(function(){$("#tak-nav-bar>.home").addClass("active");});
        document.title='Takanori Watanabe - Home';
    </script>
    
    <div class="row" style="padding-bottom: 10px">
        <div class="col-md-9">
            <h2>About me</h2>
            <p>
                I am a PhD candidate in the <a href="http://www.eecs.umich.edu/" target="_blank" >EECS department</a> at the 
                <a href="http://www.umich.edu" target="_blank">University of Michigan</a> where I conduct machine learning research
                under the supervision of Professor <a href="http://web.eecs.umich.edu/~cscott/" target="blank">Clayton Scott</a>.
                My research focuses on designing new machine learning and large-scale optimization algorithms, 
                particularly for studying patterns in large and complicated clinical datasets.
            </p>
            
<!--            <p>My research interests include area such as: Machine Learning, Statistical Signal Processing, 
        Large Scale Convex Optimization, Sparsity and Feature Selection, Functional Neuroimaging.</p>-->
<!--    <p>
        <strong>Research Interests</strong>: Machine Learning, Statistical Signal Processing, 
        Large Scale Convex Optimization, Sparsity and Feature Selection, Functional Neuroimaging.
    </p>-->
    <p><font size="3.5"><b><mark>News</mark> &ndash; I am graduating in December of 2014, and am currently looking for a full-time or a post-doc position.</b></font></p>
        </div>
        <div class="col-md-3">
                <img src="img/profile.jpg" alt="Tak Watanabe" class="img-circle pull-left" width="180px" align="left" style="position:relative; top:30px;">
        </div>
    </div>
    
    <h3>My Research &ndash; Machine Learning for Massive Biomedical Data</h3>
    <div class="row" style="padding-bottom: 0px">
        
        <div class="col-md-8">            
            <p>
                The central theme of my research is to develop computationally tractable machine learning methods 
                that allow us to extract scientifically meaningful information from massive and highly complex data, 
                particularly biomedical datasets (e.g., fMRI, DTI, gene microarray) which further tend to be noisy and 
                limited in sample size. 
            </p>
            <p>
                As many traditional statistical methods break down in such setting, the goal of my research is to: 
                (1) develop specialized machine learning methods that leverage potential structure in the data, 
                which can improve predictive power and model interpretability, and 
                (2) design and implement scalable (numerical) optimization algorithms to address data dimensionality.
            </p>
            <p>
                For additional information about my research, please visit my <a href="research.php">research page</a> for a list of my publications.
            </p>
        </div>
        <div class="col-md-4"><img src="img/sparse-brain.png" alt="Brain Connectivity" class="img-circle pull-left" width="260px"  style="position:relative; top:10px;"></div>
    </div>

    
    
    
    
    <!--(<a href="index.html" target="_blank">Old website</a>)-->
<?php include('php-parts/footer.php'); ?>