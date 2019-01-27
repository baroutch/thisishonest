<?php

class Content_action_blocVideo_531b1ce532cb961cbb59b5389b8320ecfe498ace extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output19 = '';

$output19 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
        <article style="height:';
$array23 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('video_height', $array23)]);

$output22 .= 'px; background-image:url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['src'] = NULL;
$arguments24['treatIdAsReference'] = false;
$arguments24['image'] = NULL;
$arguments24['crop'] = NULL;
$arguments24['cropVariant'] = 'default';
$arguments24['width'] = NULL;
$arguments24['height'] = NULL;
$arguments24['minWidth'] = NULL;
$arguments24['minHeight'] = NULL;
$arguments24['maxWidth'] = NULL;
$arguments24['maxHeight'] = NULL;
$arguments24['absolute'] = false;
$array26 = array (
);$arguments24['src'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('vignette.uid', $array26)]);
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array27['0'] = 1;

$expression28 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments24['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression28(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);

$output22 .= '\');" class="bloc_video">
    ';
return $output22;
};
$arguments20 = array();

$output19 .= '';

$output19 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
        <article style="height:100vh; background-image:url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['src'] = NULL;
$arguments32['treatIdAsReference'] = false;
$arguments32['image'] = NULL;
$arguments32['crop'] = NULL;
$arguments32['cropVariant'] = 'default';
$arguments32['width'] = NULL;
$arguments32['height'] = NULL;
$arguments32['minWidth'] = NULL;
$arguments32['minHeight'] = NULL;
$arguments32['maxWidth'] = NULL;
$arguments32['maxHeight'] = NULL;
$arguments32['absolute'] = false;
$array34 = array (
);$arguments32['src'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('vignette.uid', $array34)]);
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array35['0'] = 1;

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments32['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);

$output31 .= '\');" class="bloc_video">
    ';
return $output31;
};
$arguments29 = array();
$arguments29['if'] = NULL;

$output19 .= '';

$output19 .= '
';
return $output19;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('height_type', $array17);
$array16['1'] = ' == 2';

$expression18 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
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

$output3 .= 'px; background-image:url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['src'] = NULL;
$arguments5['treatIdAsReference'] = false;
$arguments5['image'] = NULL;
$arguments5['crop'] = NULL;
$arguments5['cropVariant'] = 'default';
$arguments5['width'] = NULL;
$arguments5['height'] = NULL;
$arguments5['minWidth'] = NULL;
$arguments5['minHeight'] = NULL;
$arguments5['maxWidth'] = NULL;
$arguments5['maxHeight'] = NULL;
$arguments5['absolute'] = false;
$array7 = array (
);$arguments5['src'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('vignette.uid', $array7)]);
// Rendering Boolean node
// Rendering Array
$array8 = array();
$array8['0'] = 1;

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments5['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)
					),
					$renderingContext
				);

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output3 .= '\');" class="bloc_video">
    ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
        <article style="height:100vh; background-image:url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['src'] = NULL;
$arguments11['treatIdAsReference'] = false;
$arguments11['image'] = NULL;
$arguments11['crop'] = NULL;
$arguments11['cropVariant'] = 'default';
$arguments11['width'] = NULL;
$arguments11['height'] = NULL;
$arguments11['minWidth'] = NULL;
$arguments11['minHeight'] = NULL;
$arguments11['maxWidth'] = NULL;
$arguments11['maxHeight'] = NULL;
$arguments11['absolute'] = false;
$array13 = array (
);$arguments11['src'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('vignette.uid', $array13)]);
// Rendering Boolean node
// Rendering Array
$array14 = array();
$array14['0'] = 1;

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['treatIdAsReference'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)
					),
					$renderingContext
				);

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output10 .= '\');" class="bloc_video">
    ';
return $output10;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    <div class="bloc-video-content">
        <div class="titre_bloc_video">';
$array37 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('titre', $array37)]);

$output0 .= '</div>
        <div class="sstitre_bloc_video">';
$array38 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sstitre', $array38)]);

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