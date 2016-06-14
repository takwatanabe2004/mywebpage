<!-- ======================================================================= -->
<!-- Include header php -->
<!-- ======================================================================= -->
<?php include('php-parts/header.php'); ?>

        <!-- ======================================================================= -->
        <!-- Begin main page conent php -->
        <!-- ======================================================================= -->
        <script>
            $(document).ready(function(){$("#tak-nav-bar>.research").addClass("active");});
            document.title='Research';
        </script>

        <h2>Research &ndash; Machine Learning on Massive Biomedical Data</h2>
        <div class="row" style="padding-bottom: 0px">

            <div class="col-md-8 col-xs-7" style="padding-top: 10px">     
                <p>
                    The central theme of my research is to develop computationally tractable 
                    machine learning methods that allow us to extract scientifically meaningful 
                    information from massive and highly complex data, particularly biomedical 
                    datasets (e.g., fMRI, DTI, gene microarray) which further tend to be noisy
                    and limited in sample size. 
                </p>
                <p>
                    As many traditional statistical methods break down in such setting, the goal of my research is to: 
                    (1) develop specialized machine learning methods that leverage potential structure 
                    in the data, which can improve predictive power and model interpretability, and 
                    (2) design and implement scalable (numerical) optimization algorithms to 
                    address data dimensionality.
                </p>
                <p>
                    <!--For additional information about my research, please visit my 
                    <a href="research.php">research page</a> for a list of my publications.-->
                </p>
            </div>
            <div class="col-md-4 col-xs-5">
                <img src="img/sparse-brain.png" alt="Brain Connectivity" 
                     class="img-rounded " width="250px" style="position:relative; top:0px;">
            </div>
        </div>
        
        
        <h2>PhD Dissertation (University of Michigan &ndash; Ann Arbor, 2015)</h2>
        <ul>
            <li>Scalable Machine Learning Methods for Massive Biomedical Data Analysis 
                [<a href="thesis-final.pdf" target="_blank">pdf</a>]
                <!-- [<a href="thesis-draft.pdf" target="_blank">pdf</a>] -->
            </li>
        </ul>
        <h2>Publications</h2>
        <ul>
            <li>
                <b>T. Watanabe</b>, B. Tunc, D. Parker, J. Kim, R. Verma, 
                ``Label-Informed Non-negative Matrix Factorization with Manifold Regularization for Discriminative Subnetwork Detection,''
                  	Accepted to: <a href="http://miccai2016.org/">
				<em>MICCAI</em></a>,
                2016.
            </li>
            <li>
                <b>T. Watanabe</b>, D. Kessler, C. Scott, C. Sripada, 
                ``<a href="http://stmi2014.ece.cornell.edu/program.html">Multisite 
                    Disease Classification with Functional Connectomes via Multitask Structured Sparse SVM</a>,''
                <a href="http://stmi2014.ece.cornell.edu/"><em>Sparsity Techniques in Medical Imaging (STMI)</em></a>, 
                Boston, USA, 2014. [<a href="stmi2014.pdf">Author preprint (.pdf)</a>]
            </li>
            <li>
                <b>T. Watanabe</b>, D. Kessler,  C. Scott, M. Angstadt, C. Sripada, 
                ``<a href="http://www.sciencedirect.com/science/article/pii/S1053811914002286">Disease
			 	Prediction based on Functional Connectomes using a Scalable and Spatially-Informed 
                    Support Vector Machine</a>,'' 
                <em>NeuroImage</em>, vol. 96, no. 4, pp. 183-202, 2014. 
                (<a href="https://github.com/takwatanabe2004/spatialSVM">code</a>) 
                [<a href="http://arxiv.org/abs/1310.5415">arXiv</a>]
            </li>
            <li>
                <b>T. Watanabe</b>, C. Scott, D. Kessler,  M. Angstadt, C. Sripada, 
                ``<a href="http://ieeexplore.ieee.org/xpl/articleDetails.jsp?arnumber=6854753&searchWithin%3DScalable+Fused+Lasso+SVM+for+Connectome-based+Disease+Classification%26sortType%3Dasc_p_Sequence%26filter%3DAND%28p_IS_Number%3A6853544%29">Scalable Fused Lasso SVM for Connectome-based Disease Classification</a>,''
                <a href="http://www.icassp2014.org/home.html">
                    <em>IEEE International Conference on Acoustics, Speech, and Signal Processing</em> (ICASSP)</a>, 
                Florence, Italy, 2014.
            </li>
            <li>
                C. Sripada, D. Kessler, <b>T. Watanabe</b>, R. Welsh, Y. Fang, M. Angstadt, S. Taylor, C. Scott, 
                ``<a href="http://www.sciencedirect.com/science/article/pii/S0006322313002874">Whole-brain
                    connectomic analysis of 145 resting state scans reveals network 
                    neurosignatures of schizophrenia</a>,'' 
                <em><a href="http://www.abstractsonline.com/Plan/ViewAbstract.aspx?sKey=0b7724d2-8f52-4366-8526-993d4e673c5e&cKey=424fdcf4-f4ad-4aeb-af50-d07f78bc6a14&mKey=%7b5D0375C3-8DF6-45CA-9F2B-467FE341BC0C%7d">
                    Biological Psychiatry</a></em>, vol. 73, pp. 37-38S, 2013.
            </li>
            <li>
                <b>T. Watanabe</b> and C. Scott, 
                ``<a href="http://link.springer.com/chapter/10.1007%2F978-3-642-31340-0_13">Spatial
                    Confidence Regions for Quantifying and Visualizing Registration Uncertainty</a>," 
                <em>Biomedical Image Registration</em>, vol. 7359, pp. 120-130, 2012.  
                [<a href="wbir2012.pdf">Author preprint (.pdf)</a>]
            </li>                
        </ul>

        <h2>Presentations</h2>
        <ul>
            <li><em>Medical Image Computing &amp; Computer Assisted Intervention (MICCAI)</em>, Athens, Greece (to be presented October 2016).
            <li><em>International Workshop on Sparsity Techniques in Medical Imaging</em>, MIT, Cambridge, MA, September 14, 2014.
            <li><em>Workshop on Sensing and Analysis of High-Dimensional Data</em>, Duke University, Durham, NC, July 23-25, 2013.
            <li><em>Workshop on Biomedical Image Registration</em>, Vanderbilt University, Nashville, TN, July 7-8, 2012.
            <li><em>Michigan Student Symposium for Interdisciplinary Statistical Sciences</em>, University of Michigan, Ann Arbor, MI, April 6, 2012.
        </ul>

        <h2>Research Notes</h2>
        Some snapshots of my <a href="notes/FL-OCP1-Linearized-ADMM.pdf" target="_blank">research notes</a> 
        to give an idea of the way I think, and the typical <a href="notes/notes-2014.pdf" target="_blank">ideation process</a> in my research.

        <h3>Other old notes:</h3>
        <ul>
            <li>Notes prepared for Machine Learning Reading Group [<a href="notes/ml-meeting-nov2015.pdf">pdf</a>]</li>
            <li>(more to come...)</li>
        </ul>
	    
        <!--<h1>h1</h1>
        <h2>h2</h2>
        <h3>h3</h3>
        <h4>h4</h4>
        <h5>h5</h5>
        <h6>h6</h6>-->
        
        <!-- ======================================================================= -->
        <!-- Include footer php -->
        <!-- ======================================================================= -->
        <?php include('php-parts/footer.php'); ?>
