<?php

class Content_action_blocVideo_c6e732a39774b86de75fb04f4d8e6824b44251b3 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
        <article style="height:';
$array15 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('video_height', $array15)]);

$output14 .= 'px; background-image:url(\'./uploads/tx_hocontent/';
$array16 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('vignette', $array16)]);

$output14 .= '\');" class="bloc_video">
    ';
return $output14;
};
$arguments12 = array();

$output11 .= '';

$output11 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
        <article style="height:100vh; background-image:url(\'./uploads/tx_hocontent/';
$array20 = array (
);
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('vignette', $array20)]);

$output19 .= '\');" class="bloc_video">
    ';
return $output19;
};
$arguments17 = array();
$arguments17['if'] = NULL;

$output11 .= '';

$output11 .= '
';
return $output11;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array8 = array();
$array9 = array (
);$array8['0'] = $renderingContext->getVariableProvider()->getByPath('height_type', $array9);
$array8['1'] = ' == 2';

$expression10 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression10(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
        <article style="height:';
$array4 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('video_height', $array4)]);

$output3 .= 'px; background-image:url(\'./uploads/tx_hocontent/';
$array5 = array (
);
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('vignette', $array5)]);

$output3 .= '\');" class="bloc_video">
    ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        <article style="height:100vh; background-image:url(\'./uploads/tx_hocontent/';
$array7 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('vignette', $array7)]);

$output6 .= '\');" class="bloc_video">
    ';
return $output6;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    <div class="bloc-video-content">
        <div class="titre_bloc_video">';
$array21 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('titre', $array21)]);

$output0 .= '</div>
        <div class="sstitre_bloc_video">';
$array22 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sstitre', $array22)]);

$output0 .= '</div>
    </div>
    <div class="popin-video">
        Test Popin video
    </div>
</article>';

return $output0;
}


}
#