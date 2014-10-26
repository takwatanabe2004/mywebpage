<?php include('php-parts/header.php'); ?>

<script>
    $(document).ready(function(){$("#tak-nav-bar>.research").addClass("active");});
    document.title='Research';
</script>
    <h2>Research &ndash; Machine Learning on Large Biomedical Data</h2>
    <div class="row" style="padding-bottom: 0px">
        
        <div class="col-md-8" style="padding-top: 10px">     
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
                <!--For additional information about my research, please visit my <a href="research.php">research page</a> for a list of my publications.-->
            </p>
        </div>
        <div class="col-md-4"><img src="img/sparse-brain.png" alt="Brain Connectivity" 
                                   class="img-rounded pull-left" width="250px" 
                                   style="position:relative; top:0px;"></div>
    </div>
    
<h2>Publications</h2>
<ul>
    <li>
        <b>T. Watanabe</b>, D. Kessler, C. Scott, C. Sripada, ``<a href="http://stmi2014.ece.cornell.edu/program.html">Multisite Disease Classification with Functional Connectomes via Multitask Structured Sparse SVM</a>,''
        <a href="http://stmi2014.ece.cornell.edu/"><em>Sparsity Techniques in Medical Imaging (STMI)</em></a>, Boston, USA, September 2014. [<a href="stmi2014.pdf">Author preprint (.pdf)</a>]
    </li>
    <li>
        <b>T. Watanabe</b>, D. Kessler,  C. Scott, M. Angstadt, C. Sripada, ``<a href="http://www.sciencedirect.com/science/article/pii/S1053811914002286">Disease Prediction based on Functional Connectomes using a Scalable and Spatially-Informed Support Vector Machine</a>,'' 
        <em>NeuroImage</em>, vol. 96, no. 4, pp. 183-202, August 2014. (<a href="https://github.com/takwatanabe2004/spatialSVM">code</a>) [<a href="http://arxiv.org/abs/1310.5415">arXiv</a>]
    </li>
    <li>
        <b>T. Watanabe</b>, C. Scott, D. Kessler,  M. Angstadt, C. Sripada, 
        ``<a href="http://ieeexplore.ieee.org/xpl/articleDetails.jsp?arnumber=6854753&searchWithin%3DScalable+Fused+Lasso+SVM+for+Connectome-based+Disease+Classification%26sortType%3Dasc_p_Sequence%26filter%3DAND%28p_IS_Number%3A6853544%29">Scalable Fused Lasso SVM for Connectome-based Disease Classification</a>,''
        <a href="http://www.icassp2014.org/home.html"><em>IEEE International Conference on Acoustics, Speech, and Signal Processing</em> (ICASSP)</a>, pp. 6030-6034, Florence, Italy, May 2014.
    </li>
    <li>
        C. Sripada, D. Kessler, <b>T. Watanabe</b>, R. Welsh, Y. Fang, M. Angstadt, S. Taylor, C. Scott, 
        ``<a href="http://www.sciencedirect.com/science/article/pii/S0006322313002874">
            Whole-brain connectomic analysis of 145 resting state scans reveals network neurosignatures of schizophrenia</a>,'' 
        <em><a href="http://www.abstractsonline.com/Plan/ViewAbstract.aspx?sKey=0b7724d2-8f52-4366-8526-993d4e673c5e&cKey=424fdcf4-f4ad-4aeb-af50-d07f78bc6a14&mKey=%7b5D0375C3-8DF6-45CA-9F2B-467FE341BC0C%7d">Society of Biological Psychiatry</a></em>, May 2013.
    </li>
    <li>
        <b>T. Watanabe</b> and C. Scott, ``<a href="http://link.springer.com/chapter/10.1007%2F978-3-642-31340-0_13">Spatial Confidence Regions for Quantifying and Visualizing Registration Uncertainty</a>," <em>Biomedical Image Registration</em>, vol. 7359, pp. 120-130, July 2012.  [<a href="wbir2012.pdf">Author preprint (.pdf)</a>]
    </li>                
</ul>

<h2>Presentations</h2>
<ul>
    <li><em>International Workshop on Sparsity Techniques in Medical Imaging</em>, MIT, Cambridge, MA, September 14, 2014.
    <li><em>Workshop on Sensing and Analysis of High-Dimensional Data</em>, Duke University, Durham, NC, July 23-25, 2013.
    <li><em>Workshop on Biomedical Image Registration</em>, Vanderbilt University, Nashville, TN, July 7-8, 2012.
    <li><em>Michigan Student Symposium for Interdisciplinary Statistical Sciences</em>, University of Michigan, Ann Arbor, MI, April 6, 2012.
</ul>

<h2>Research Notes</h2>
Some snapshots of my <a href="notes/FL-OCP1-Linearized-ADMM.pdf" target="_blank">research notes</a> 
to give an idea of the way I think.
<!--<h1>h1</h1>
<h2>h2</h2>
<h3>h3</h3>
<h4>h4</h4>
<h5>h5</h5>
<h6>h6</h6>-->
<?php include('php-parts/footer.php'); ?>