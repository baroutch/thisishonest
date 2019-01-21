<?php

class List_action_index_22d76e3b84db6ce40240f27c3ead9205e7bd80ae extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'main';
}
public function hasLayout() {
return TRUE;
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
  'em' => 
  array (
    0 => 'TYPO3\\CMS\\Extensionmanager\\ViewHelpers',
  ),
));
}

/**
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['languageKey'] = NULL;
$arguments1['alternativeLanguageKeys'] = NULL;
$arguments1['key'] = 'installedExtensions';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['section'] = NULL;
$arguments4['partial'] = NULL;
$arguments4['delegate'] = NULL;
$arguments4['renderable'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$arguments4['default'] = NULL;
$arguments4['contentAs'] = NULL;
$arguments4['debug'] = true;
$arguments4['partial'] = 'List/UploadForm';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '

	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['name'] = NULL;
$arguments6['value'] = NULL;
$arguments6['property'] = NULL;
$arguments6['autofocus'] = NULL;
$arguments6['disabled'] = NULL;
$arguments6['maxlength'] = NULL;
$arguments6['readonly'] = NULL;
$arguments6['size'] = NULL;
$arguments6['placeholder'] = NULL;
$arguments6['pattern'] = NULL;
$arguments6['errorClass'] = 'f3-form-error';
$arguments6['class'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['id'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$arguments6['required'] = false;
$arguments6['type'] = 'text';
$arguments6['name'] = 'Tx_Extensionmanager_extensionkey';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['key'] = NULL;
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$arguments8['languageKey'] = NULL;
$arguments8['alternativeLanguageKeys'] = NULL;
$arguments8['key'] = 'extensionList.search';
$arguments6['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);
$arguments6['id'] = 'Tx_Extensionmanager_extensionkey';
$array10 = array (
);$arguments6['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array10);
$arguments6['class'] = 'form-control';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
		</div>
	</form>
	<br>
	<div class="table-fit">
		<table id="typo3-extension-list" class="table table-striped table-hover typo3-extension-list">
		<thead>
			<tr>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['languageKey'] = NULL;
$arguments11['alternativeLanguageKeys'] = NULL;
$arguments11['key'] = 'extensionList.header.title.update';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output3 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['key'] = NULL;
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$arguments13['languageKey'] = NULL;
$arguments13['alternativeLanguageKeys'] = NULL;
$arguments13['key'] = 'extensionList.header.update';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output3 .= '</th>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['key'] = NULL;
$arguments15['id'] = NULL;
$arguments15['default'] = NULL;
$arguments15['arguments'] = NULL;
$arguments15['extensionName'] = NULL;
$arguments15['languageKey'] = NULL;
$arguments15['alternativeLanguageKeys'] = NULL;
$arguments15['key'] = 'extensionList.header.title.activate';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output3 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['languageKey'] = NULL;
$arguments17['alternativeLanguageKeys'] = NULL;
$arguments17['key'] = 'extensionList.header.activate';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['languageKey'] = NULL;
$arguments19['alternativeLanguageKeys'] = NULL;
$arguments19['key'] = 'extensionList.header.extensionName';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['key'] = NULL;
$arguments21['id'] = NULL;
$arguments21['default'] = NULL;
$arguments21['arguments'] = NULL;
$arguments21['extensionName'] = NULL;
$arguments21['languageKey'] = NULL;
$arguments21['alternativeLanguageKeys'] = NULL;
$arguments21['key'] = 'extensionList.header.extensionKey';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['key'] = NULL;
$arguments23['id'] = NULL;
$arguments23['default'] = NULL;
$arguments23['arguments'] = NULL;
$arguments23['extensionName'] = NULL;
$arguments23['languageKey'] = NULL;
$arguments23['alternativeLanguageKeys'] = NULL;
$arguments23['key'] = 'extensionList.header.extensionVersion';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['key'] = NULL;
$arguments25['id'] = NULL;
$arguments25['default'] = NULL;
$arguments25['arguments'] = NULL;
$arguments25['extensionName'] = NULL;
$arguments25['languageKey'] = NULL;
$arguments25['alternativeLanguageKeys'] = NULL;
$arguments25['key'] = 'extensionList.header.extensionState';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['key'] = NULL;
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$arguments27['languageKey'] = NULL;
$arguments27['alternativeLanguageKeys'] = NULL;
$arguments27['key'] = 'extensionList.header.extensionType';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output3 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['key'] = NULL;
$arguments29['id'] = NULL;
$arguments29['default'] = NULL;
$arguments29['arguments'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['languageKey'] = NULL;
$arguments29['alternativeLanguageKeys'] = NULL;
$arguments29['key'] = 'extensionList.header.extensionActions';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output3 .= '</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
						<tr id="';
$array68 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array68)]);

$output67 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['then'] = NULL;
$arguments69['else'] = NULL;
$arguments69['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array72)]);
$array71['1'] = ' == -1';

$expression73 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments69['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression73(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);
$arguments69['then'] = 'insecure';

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['then'] = NULL;
$arguments74['else'] = NULL;
$arguments74['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array76 = array();
$array77 = array (
);$array76['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array77)]);
$array76['1'] = ' == -2';

$expression78 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};
$arguments74['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression78(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)
					),
					$renderingContext
				);
$arguments74['then'] = 'outdated';

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output67 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array82)]);

$expression83 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression83(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments79['then'] = '';
$arguments79['else'] = 'inactive';

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output67 .= '">
					';
return $output67;
};
$arguments65 = array();

$output64 .= '';

$output64 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
						<tr id="';
$array87 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array87)]);

$output86 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$arguments88['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array91)]);

$expression92 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments88['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);
$arguments88['then'] = '';
$arguments88['else'] = 'inactive';

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output86 .= '">
					';
return $output86;
};
$arguments84 = array();
$arguments84['if'] = NULL;

$output64 .= '';

$output64 .= '
				';
return $output64;
};
$arguments35 = array();
$arguments35['then'] = NULL;
$arguments35['else'] = NULL;
$arguments35['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array61 = array();
$array62 = array (
);$array61['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject', $array62);

$expression63 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments35['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression63(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array61)
					),
					$renderingContext
				);
$arguments35['__thenClosure'] = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
						<tr id="';
$array38 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array38)]);

$output37 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$arguments39['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array42)]);
$array41['1'] = ' == -1';

$expression43 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments39['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments39['then'] = 'insecure';

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$arguments44['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array47)]);
$array46['1'] = ' == -2';

$expression48 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};
$arguments44['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments44['then'] = 'outdated';

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output37 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$arguments49['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array52 = array (
);$array51['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array52)]);

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments49['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression53(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);
$arguments49['then'] = '';
$arguments49['else'] = 'inactive';

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output37 .= '">
					';
return $output37;
};
$arguments35['__elseClosures'][] = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
						<tr id="';
$array55 = array (
);
$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array55)]);

$output54 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['then'] = NULL;
$arguments56['else'] = NULL;
$arguments56['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array58 = array();
$array59 = array (
);$array58['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array59)]);

$expression60 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments56['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression60(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array58)
					),
					$renderingContext
				);
$arguments56['then'] = '';
$arguments56['else'] = 'inactive';

$output54 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output54 .= '">
					';
return $output54;
};

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['key'] = NULL;
$arguments130['id'] = NULL;
$arguments130['default'] = NULL;
$arguments130['arguments'] = NULL;
$arguments130['extensionName'] = NULL;
$arguments130['languageKey'] = NULL;
$arguments130['alternativeLanguageKeys'] = NULL;
$arguments130['key'] = 'extensionList.updateDisabled';

$output129 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext)]);

$output129 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments132 = array();
$arguments132['identifier'] = NULL;
$arguments132['size'] = 'small';
$arguments132['overlay'] = NULL;
$arguments132['state'] = 'default';
$arguments132['alternativeMarkupIdentifier'] = NULL;
$arguments132['identifier'] = 'actions-system-extension-update';

$output129 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output129 .= '
								</span>
							';
return $output129;
};
$arguments127 = array();

$output126 .= '';

$output126 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$output148 = '';

$output148 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments149 = array();
$arguments149['identifier'] = NULL;
$arguments149['size'] = 'small';
$arguments149['overlay'] = NULL;
$arguments149['state'] = 'default';
$arguments149['alternativeMarkupIdentifier'] = NULL;
$arguments149['identifier'] = 'actions-system-extension-update';

$output148 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output148 .= '
									';
return $output148;
};
$arguments137 = array();
$arguments137['additionalAttributes'] = NULL;
$arguments137['data'] = NULL;
$arguments137['class'] = NULL;
$arguments137['dir'] = NULL;
$arguments137['id'] = NULL;
$arguments137['lang'] = NULL;
$arguments137['style'] = NULL;
$arguments137['title'] = NULL;
$arguments137['accesskey'] = NULL;
$arguments137['tabindex'] = NULL;
$arguments137['onclick'] = NULL;
$arguments137['name'] = NULL;
$arguments137['rel'] = NULL;
$arguments137['rev'] = NULL;
$arguments137['target'] = NULL;
$arguments137['action'] = NULL;
$arguments137['controller'] = NULL;
$arguments137['extensionName'] = NULL;
$arguments137['pluginName'] = NULL;
$arguments137['pageUid'] = NULL;
$arguments137['pageType'] = NULL;
$arguments137['noCache'] = NULL;
$arguments137['noCacheHash'] = NULL;
$arguments137['section'] = NULL;
$arguments137['format'] = NULL;
$arguments137['linkAccessRestrictedPages'] = NULL;
$arguments137['additionalParams'] = NULL;
$arguments137['absolute'] = NULL;
$arguments137['addQueryString'] = NULL;
$arguments137['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments137['addQueryStringMethod'] = NULL;
$arguments137['arguments'] = NULL;
$arguments137['action'] = 'updateCommentForUpdatableVersions';
$arguments137['class'] = 'btn btn-default';
// Rendering Array
$array139 = array();
$array139['data-action'] = 'update-extension';
$arguments137['additionalAttributes'] = $array139;
$arguments137['format'] = 'json';
$arguments137['controller'] = 'Download';
// Rendering Array
$array140 = array();
$array141 = array (
);$array140['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array141);
$array142 = array (
);$array140['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array142);
$array143 = array (
);$array140['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array143);
$arguments137['arguments'] = $array140;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();
$arguments144['key'] = NULL;
$arguments144['id'] = NULL;
$arguments144['default'] = NULL;
$arguments144['arguments'] = NULL;
$arguments144['extensionName'] = NULL;
$arguments144['languageKey'] = NULL;
$arguments144['alternativeLanguageKeys'] = NULL;
$arguments144['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array146 = array();
$array147 = array (
);$array146['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array147);
$arguments144['arguments'] = $array146;
$arguments137['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output136 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output136 .= '
							';
return $output136;
};
$arguments134 = array();
$arguments134['if'] = NULL;

$output126 .= '';

$output126 .= '
						';
return $output126;
};
$arguments99 = array();
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$arguments99['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array121 = array();
$array122 = array (
);$array121['0'] = $renderingContext->getVariableProvider()->getByPath('isComposerMode', $array122);
$array121['1'] = ' || ';
$array123 = array (
);$array121['2'] = $renderingContext->getVariableProvider()->getByPath('settings.offlineMode', $array123);
$array121['3'] = ' || ';
$array124 = array (
);$array121['4'] = $renderingContext->getVariableProvider()->getByPath('extension.state', $array124);
$array121['5'] = ' == \'excludeFromUpdates\'';

$expression125 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]) == 'excludeFromUpdates'));};
$arguments99['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array121)
					),
					$renderingContext
				);
$arguments99['__thenClosure'] = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['key'] = NULL;
$arguments102['id'] = NULL;
$arguments102['default'] = NULL;
$arguments102['arguments'] = NULL;
$arguments102['extensionName'] = NULL;
$arguments102['languageKey'] = NULL;
$arguments102['alternativeLanguageKeys'] = NULL;
$arguments102['key'] = 'extensionList.updateDisabled';

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext)]);

$output101 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['identifier'] = NULL;
$arguments104['size'] = 'small';
$arguments104['overlay'] = NULL;
$arguments104['state'] = 'default';
$arguments104['alternativeMarkupIdentifier'] = NULL;
$arguments104['identifier'] = 'actions-system-extension-update';

$output101 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output101 .= '
								</span>
							';
return $output101;
};
$arguments99['__elseClosures'][] = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['identifier'] = NULL;
$arguments119['size'] = 'small';
$arguments119['overlay'] = NULL;
$arguments119['state'] = 'default';
$arguments119['alternativeMarkupIdentifier'] = NULL;
$arguments119['identifier'] = 'actions-system-extension-update';

$output118 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
									';
return $output118;
};
$arguments107 = array();
$arguments107['additionalAttributes'] = NULL;
$arguments107['data'] = NULL;
$arguments107['class'] = NULL;
$arguments107['dir'] = NULL;
$arguments107['id'] = NULL;
$arguments107['lang'] = NULL;
$arguments107['style'] = NULL;
$arguments107['title'] = NULL;
$arguments107['accesskey'] = NULL;
$arguments107['tabindex'] = NULL;
$arguments107['onclick'] = NULL;
$arguments107['name'] = NULL;
$arguments107['rel'] = NULL;
$arguments107['rev'] = NULL;
$arguments107['target'] = NULL;
$arguments107['action'] = NULL;
$arguments107['controller'] = NULL;
$arguments107['extensionName'] = NULL;
$arguments107['pluginName'] = NULL;
$arguments107['pageUid'] = NULL;
$arguments107['pageType'] = NULL;
$arguments107['noCache'] = NULL;
$arguments107['noCacheHash'] = NULL;
$arguments107['section'] = NULL;
$arguments107['format'] = NULL;
$arguments107['linkAccessRestrictedPages'] = NULL;
$arguments107['additionalParams'] = NULL;
$arguments107['absolute'] = NULL;
$arguments107['addQueryString'] = NULL;
$arguments107['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments107['addQueryStringMethod'] = NULL;
$arguments107['arguments'] = NULL;
$arguments107['action'] = 'updateCommentForUpdatableVersions';
$arguments107['class'] = 'btn btn-default';
// Rendering Array
$array109 = array();
$array109['data-action'] = 'update-extension';
$arguments107['additionalAttributes'] = $array109;
$arguments107['format'] = 'json';
$arguments107['controller'] = 'Download';
// Rendering Array
$array110 = array();
$array111 = array (
);$array110['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array111);
$array112 = array (
);$array110['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array112);
$array113 = array (
);$array110['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array113);
$arguments107['arguments'] = $array110;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['key'] = NULL;
$arguments114['id'] = NULL;
$arguments114['default'] = NULL;
$arguments114['arguments'] = NULL;
$arguments114['extensionName'] = NULL;
$arguments114['languageKey'] = NULL;
$arguments114['alternativeLanguageKeys'] = NULL;
$arguments114['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array116 = array();
$array117 = array (
);$array116['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array117);
$arguments114['arguments'] = $array116;
$arguments107['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
							';
return $output106;
};

$output98 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= '
					';
return $output98;
};
$arguments93 = array();
$arguments93['then'] = NULL;
$arguments93['else'] = NULL;
$arguments93['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateAvailable', $array96);

$expression97 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments93['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments93['__thenClosure'] = $renderChildrenClosure94;

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output34 .= '
				</td>
				<td data-order="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['then'] = NULL;
$arguments151['else'] = NULL;
$arguments151['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array153 = array();
$array154 = array (
);$array153['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array154);

$expression155 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments151['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression155(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array153)
					),
					$renderingContext
				);
$arguments151['then'] = 'active';
$arguments151['else'] = 'inactive';

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output34 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['additionalAttributes'] = NULL;
$arguments156['data'] = NULL;
$arguments156['class'] = NULL;
$arguments156['dir'] = NULL;
$arguments156['id'] = NULL;
$arguments156['lang'] = NULL;
$arguments156['style'] = NULL;
$arguments156['title'] = NULL;
$arguments156['accesskey'] = NULL;
$arguments156['tabindex'] = NULL;
$arguments156['onclick'] = NULL;
$arguments156['name'] = NULL;
$arguments156['rel'] = NULL;
$arguments156['rev'] = NULL;
$arguments156['target'] = NULL;
$arguments156['action'] = NULL;
$arguments156['controller'] = NULL;
$arguments156['extensionName'] = NULL;
$arguments156['pluginName'] = NULL;
$arguments156['pageUid'] = NULL;
$arguments156['pageType'] = NULL;
$arguments156['noCache'] = NULL;
$arguments156['noCacheHash'] = NULL;
$arguments156['section'] = NULL;
$arguments156['format'] = NULL;
$arguments156['linkAccessRestrictedPages'] = NULL;
$arguments156['additionalParams'] = NULL;
$arguments156['absolute'] = NULL;
$arguments156['addQueryString'] = NULL;
$arguments156['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments156['addQueryStringMethod'] = NULL;
$arguments156['arguments'] = NULL;
$arguments156['extension'] = NULL;
$array158 = array (
);$arguments156['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array158);

$output34 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output34 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$output164 = '';

$output164 .= '
						<img class="ext-icon" src="../';
$array165 = array (
);
$output164 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.siteRelPath', $array165)]);
$array166 = array (
);
$output164 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array166)]);

$output164 .= '" alt="';
$array167 = array (
);
$output164 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array167)]);

$output164 .= '" />
					';
return $output164;
};
$arguments159 = array();
$arguments159['then'] = NULL;
$arguments159['else'] = NULL;
$arguments159['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array161 = array();
$array162 = array (
);$array161['0'] = $renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array162);

$expression163 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments159['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression163(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array161)
					),
					$renderingContext
				);
$arguments159['__thenClosure'] = $renderChildrenClosure160;

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output34 .= '
					<span title="';
$array168 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.description', $array168)]);

$output34 .= '">';
$array169 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array169)]);

$output34 .= '</span>
				</td>
				<td>
					';
$array170 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array170)]);

$output34 .= '
				</td>
				<td>
					';
$array171 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.version', $array171)]);

$output34 .= '
				</td>
				<td>
					<span class="label label-';
$array172 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state', $array172)]);

$output34 .= '">';
$array173 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state', $array173)]);

$output34 .= '</span>
				</td>
				<td>
					';
$array174 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.type', $array174)]);

$output34 .= '
				</td>
				<td>
					<div class="btn-group">
						';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['additionalAttributes'] = NULL;
$arguments179['data'] = NULL;
$arguments179['class'] = NULL;
$arguments179['dir'] = NULL;
$arguments179['id'] = NULL;
$arguments179['lang'] = NULL;
$arguments179['style'] = NULL;
$arguments179['title'] = NULL;
$arguments179['accesskey'] = NULL;
$arguments179['tabindex'] = NULL;
$arguments179['onclick'] = NULL;
$arguments179['name'] = NULL;
$arguments179['rel'] = NULL;
$arguments179['rev'] = NULL;
$arguments179['target'] = NULL;
$arguments179['action'] = NULL;
$arguments179['controller'] = NULL;
$arguments179['extensionName'] = NULL;
$arguments179['pluginName'] = NULL;
$arguments179['pageUid'] = NULL;
$arguments179['pageType'] = NULL;
$arguments179['noCache'] = NULL;
$arguments179['noCacheHash'] = NULL;
$arguments179['section'] = NULL;
$arguments179['format'] = NULL;
$arguments179['linkAccessRestrictedPages'] = NULL;
$arguments179['additionalParams'] = NULL;
$arguments179['absolute'] = NULL;
$arguments179['addQueryString'] = NULL;
$arguments179['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments179['addQueryStringMethod'] = NULL;
$arguments179['arguments'] = NULL;
$arguments179['extensionKey'] = NULL;
$arguments179['class'] = 'btn btn-default';
$array181 = array (
);$arguments179['extensionKey'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array181);

$output178 .= TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output178 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['additionalAttributes'] = NULL;
$arguments182['data'] = NULL;
$arguments182['class'] = NULL;
$arguments182['dir'] = NULL;
$arguments182['id'] = NULL;
$arguments182['lang'] = NULL;
$arguments182['style'] = NULL;
$arguments182['title'] = NULL;
$arguments182['accesskey'] = NULL;
$arguments182['tabindex'] = NULL;
$arguments182['onclick'] = NULL;
$arguments182['name'] = NULL;
$arguments182['rel'] = NULL;
$arguments182['rev'] = NULL;
$arguments182['target'] = NULL;
$arguments182['action'] = NULL;
$arguments182['controller'] = NULL;
$arguments182['extensionName'] = NULL;
$arguments182['pluginName'] = NULL;
$arguments182['pageUid'] = NULL;
$arguments182['pageType'] = NULL;
$arguments182['noCache'] = NULL;
$arguments182['noCacheHash'] = NULL;
$arguments182['section'] = NULL;
$arguments182['format'] = NULL;
$arguments182['linkAccessRestrictedPages'] = NULL;
$arguments182['additionalParams'] = NULL;
$arguments182['absolute'] = NULL;
$arguments182['addQueryString'] = NULL;
$arguments182['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments182['addQueryStringMethod'] = NULL;
$arguments182['arguments'] = NULL;
$arguments182['extension'] = NULL;
$arguments182['class'] = 'btn btn-default';
$array184 = array (
);$arguments182['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array184);

$output178 .= TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output178 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$output191 = '';

$output191 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['identifier'] = NULL;
$arguments192['size'] = 'small';
$arguments192['overlay'] = NULL;
$arguments192['state'] = 'default';
$arguments192['alternativeMarkupIdentifier'] = NULL;
$arguments192['identifier'] = 'actions-system-extension-download';

$output191 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output191 .= '
							';
return $output191;
};
$arguments185 = array();
$arguments185['additionalAttributes'] = NULL;
$arguments185['data'] = NULL;
$arguments185['class'] = NULL;
$arguments185['dir'] = NULL;
$arguments185['id'] = NULL;
$arguments185['lang'] = NULL;
$arguments185['style'] = NULL;
$arguments185['title'] = NULL;
$arguments185['accesskey'] = NULL;
$arguments185['tabindex'] = NULL;
$arguments185['onclick'] = NULL;
$arguments185['name'] = NULL;
$arguments185['rel'] = NULL;
$arguments185['rev'] = NULL;
$arguments185['target'] = NULL;
$arguments185['action'] = NULL;
$arguments185['controller'] = NULL;
$arguments185['extensionName'] = NULL;
$arguments185['pluginName'] = NULL;
$arguments185['pageUid'] = NULL;
$arguments185['pageType'] = NULL;
$arguments185['noCache'] = NULL;
$arguments185['noCacheHash'] = NULL;
$arguments185['section'] = NULL;
$arguments185['format'] = NULL;
$arguments185['linkAccessRestrictedPages'] = NULL;
$arguments185['additionalParams'] = NULL;
$arguments185['absolute'] = NULL;
$arguments185['addQueryString'] = NULL;
$arguments185['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments185['addQueryStringMethod'] = NULL;
$arguments185['arguments'] = NULL;
$arguments185['action'] = 'downloadExtensionZip';
$arguments185['controller'] = 'Action';
// Rendering Array
$array187 = array();
$array188 = array (
);$array187['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array188);
$arguments185['arguments'] = $array187;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['key'] = NULL;
$arguments189['id'] = NULL;
$arguments189['default'] = NULL;
$arguments189['arguments'] = NULL;
$arguments189['extensionName'] = NULL;
$arguments189['languageKey'] = NULL;
$arguments189['alternativeLanguageKeys'] = NULL;
$arguments189['key'] = 'extensionList.downloadzip';
$arguments185['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);
$arguments185['class'] = 'btn btn-default';

$output178 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output178 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments194 = array();
$arguments194['additionalAttributes'] = NULL;
$arguments194['data'] = NULL;
$arguments194['class'] = NULL;
$arguments194['dir'] = NULL;
$arguments194['id'] = NULL;
$arguments194['lang'] = NULL;
$arguments194['style'] = NULL;
$arguments194['title'] = NULL;
$arguments194['accesskey'] = NULL;
$arguments194['tabindex'] = NULL;
$arguments194['onclick'] = NULL;
$arguments194['name'] = NULL;
$arguments194['rel'] = NULL;
$arguments194['rev'] = NULL;
$arguments194['target'] = NULL;
$arguments194['action'] = NULL;
$arguments194['controller'] = NULL;
$arguments194['extensionName'] = NULL;
$arguments194['pluginName'] = NULL;
$arguments194['pageUid'] = NULL;
$arguments194['pageType'] = NULL;
$arguments194['noCache'] = NULL;
$arguments194['noCacheHash'] = NULL;
$arguments194['section'] = NULL;
$arguments194['format'] = NULL;
$arguments194['linkAccessRestrictedPages'] = NULL;
$arguments194['additionalParams'] = NULL;
$arguments194['absolute'] = NULL;
$arguments194['addQueryString'] = NULL;
$arguments194['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments194['addQueryStringMethod'] = NULL;
$arguments194['arguments'] = NULL;
$arguments194['extension'] = NULL;
$arguments194['class'] = 'btn btn-default';
$array196 = array (
);$arguments194['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array196);

$output178 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext);

$output178 .= '
						';
return $output178;
};
$arguments175 = array();
$arguments175['additionalAttributes'] = NULL;
$arguments175['data'] = NULL;
$arguments175['extension'] = NULL;
$array177 = array (
);$arguments175['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array177);

$output34 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output34 .= '
					</div>
				</td>
				</tr>
			';
return $output34;
};
$arguments31 = array();
$arguments31['each'] = NULL;
$arguments31['as'] = NULL;
$arguments31['key'] = NULL;
$arguments31['reverse'] = false;
$arguments31['iteration'] = NULL;
$array33 = array (
);$arguments31['each'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array33);
$arguments31['as'] = 'extension';
$arguments31['key'] = 'extensionKey';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output3 .= '
		</tbody>
	</table>
	</div>
';

return $output3;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output197 = '';

$output197 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments198 = array();
$arguments198['name'] = NULL;
$arguments198['name'] = 'main';

$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output197 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
$output202 = '';

$output202 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['key'] = NULL;
$arguments203['id'] = NULL;
$arguments203['default'] = NULL;
$arguments203['arguments'] = NULL;
$arguments203['extensionName'] = NULL;
$arguments203['languageKey'] = NULL;
$arguments203['alternativeLanguageKeys'] = NULL;
$arguments203['key'] = 'installedExtensions';

$output202 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext)]);

$output202 .= '</h1>
';
return $output202;
};
$arguments200 = array();
$arguments200['name'] = NULL;
$arguments200['name'] = 'headline';

$output197 .= NULL;

$output197 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments208 = array();
$arguments208['section'] = NULL;
$arguments208['partial'] = NULL;
$arguments208['delegate'] = NULL;
$arguments208['renderable'] = NULL;
$arguments208['arguments'] = array (
);
$arguments208['optional'] = false;
$arguments208['default'] = NULL;
$arguments208['contentAs'] = NULL;
$arguments208['debug'] = true;
$arguments208['partial'] = 'List/UploadForm';

$output207 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output207 .= '

	<form class="form-inline">
		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments210 = array();
$arguments210['additionalAttributes'] = NULL;
$arguments210['data'] = NULL;
$arguments210['name'] = NULL;
$arguments210['value'] = NULL;
$arguments210['property'] = NULL;
$arguments210['autofocus'] = NULL;
$arguments210['disabled'] = NULL;
$arguments210['maxlength'] = NULL;
$arguments210['readonly'] = NULL;
$arguments210['size'] = NULL;
$arguments210['placeholder'] = NULL;
$arguments210['pattern'] = NULL;
$arguments210['errorClass'] = 'f3-form-error';
$arguments210['class'] = NULL;
$arguments210['dir'] = NULL;
$arguments210['id'] = NULL;
$arguments210['lang'] = NULL;
$arguments210['style'] = NULL;
$arguments210['title'] = NULL;
$arguments210['accesskey'] = NULL;
$arguments210['tabindex'] = NULL;
$arguments210['onclick'] = NULL;
$arguments210['required'] = false;
$arguments210['type'] = 'text';
$arguments210['name'] = 'Tx_Extensionmanager_extensionkey';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['key'] = NULL;
$arguments212['id'] = NULL;
$arguments212['default'] = NULL;
$arguments212['arguments'] = NULL;
$arguments212['extensionName'] = NULL;
$arguments212['languageKey'] = NULL;
$arguments212['alternativeLanguageKeys'] = NULL;
$arguments212['key'] = 'extensionList.search';
$arguments210['placeholder'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);
$arguments210['id'] = 'Tx_Extensionmanager_extensionkey';
$array214 = array (
);$arguments210['value'] = $renderingContext->getVariableProvider()->getByPath('search', $array214);
$arguments210['class'] = 'form-control';

$output207 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output207 .= '
		</div>
	</form>
	<br>
	<div class="table-fit">
		<table id="typo3-extension-list" class="table table-striped table-hover typo3-extension-list">
		<thead>
			<tr>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['key'] = NULL;
$arguments215['id'] = NULL;
$arguments215['default'] = NULL;
$arguments215['arguments'] = NULL;
$arguments215['extensionName'] = NULL;
$arguments215['languageKey'] = NULL;
$arguments215['alternativeLanguageKeys'] = NULL;
$arguments215['key'] = 'extensionList.header.title.update';

$output207 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext)]);

$output207 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['key'] = NULL;
$arguments217['id'] = NULL;
$arguments217['default'] = NULL;
$arguments217['arguments'] = NULL;
$arguments217['extensionName'] = NULL;
$arguments217['languageKey'] = NULL;
$arguments217['alternativeLanguageKeys'] = NULL;
$arguments217['key'] = 'extensionList.header.update';

$output207 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext)]);

$output207 .= '</th>
				<th title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['key'] = NULL;
$arguments219['id'] = NULL;
$arguments219['default'] = NULL;
$arguments219['arguments'] = NULL;
$arguments219['extensionName'] = NULL;
$arguments219['languageKey'] = NULL;
$arguments219['alternativeLanguageKeys'] = NULL;
$arguments219['key'] = 'extensionList.header.title.activate';

$output207 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext)]);

$output207 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['key'] = NULL;
$arguments221['id'] = NULL;
$arguments221['default'] = NULL;
$arguments221['arguments'] = NULL;
$arguments221['extensionName'] = NULL;
$arguments221['languageKey'] = NULL;
$arguments221['alternativeLanguageKeys'] = NULL;
$arguments221['key'] = 'extensionList.header.activate';

$output207 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext)]);

$output207 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments223 = array();
$arguments223['key'] = NULL;
$arguments223['id'] = NULL;
$arguments223['default'] = NULL;
$arguments223['arguments'] = NULL;
$arguments223['extensionName'] = NULL;
$arguments223['languageKey'] = NULL;
$arguments223['alternativeLanguageKeys'] = NULL;
$arguments223['key'] = 'extensionList.header.extensionName';

$output207 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext)]);

$output207 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments225 = array();
$arguments225['key'] = NULL;
$arguments225['id'] = NULL;
$arguments225['default'] = NULL;
$arguments225['arguments'] = NULL;
$arguments225['extensionName'] = NULL;
$arguments225['languageKey'] = NULL;
$arguments225['alternativeLanguageKeys'] = NULL;
$arguments225['key'] = 'extensionList.header.extensionKey';

$output207 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext)]);

$output207 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['key'] = NULL;
$arguments227['id'] = NULL;
$arguments227['default'] = NULL;
$arguments227['arguments'] = NULL;
$arguments227['extensionName'] = NULL;
$arguments227['languageKey'] = NULL;
$arguments227['alternativeLanguageKeys'] = NULL;
$arguments227['key'] = 'extensionList.header.extensionVersion';

$output207 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext)]);

$output207 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['key'] = NULL;
$arguments229['id'] = NULL;
$arguments229['default'] = NULL;
$arguments229['arguments'] = NULL;
$arguments229['extensionName'] = NULL;
$arguments229['languageKey'] = NULL;
$arguments229['alternativeLanguageKeys'] = NULL;
$arguments229['key'] = 'extensionList.header.extensionState';

$output207 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext)]);

$output207 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['key'] = NULL;
$arguments231['id'] = NULL;
$arguments231['default'] = NULL;
$arguments231['arguments'] = NULL;
$arguments231['extensionName'] = NULL;
$arguments231['languageKey'] = NULL;
$arguments231['alternativeLanguageKeys'] = NULL;
$arguments231['key'] = 'extensionList.header.extensionType';

$output207 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext)]);

$output207 .= '</th>
				<th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['key'] = NULL;
$arguments233['id'] = NULL;
$arguments233['default'] = NULL;
$arguments233['arguments'] = NULL;
$arguments233['extensionName'] = NULL;
$arguments233['languageKey'] = NULL;
$arguments233['alternativeLanguageKeys'] = NULL;
$arguments233['key'] = 'extensionList.header.extensionActions';

$output207 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext)]);

$output207 .= '</th>
			</tr>
		</thead>
		<tbody>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$output238 = '';

$output238 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$output271 = '';

$output271 .= '
						<tr id="';
$array272 = array (
);
$output271 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array272)]);

$output271 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments273 = array();
$arguments273['then'] = NULL;
$arguments273['else'] = NULL;
$arguments273['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array275 = array();
$array276 = array (
);$array275['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array276)]);
$array275['1'] = ' == -1';

$expression277 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments273['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression277(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array275)
					),
					$renderingContext
				);
$arguments273['then'] = 'insecure';

$output271 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments278 = array();
$arguments278['then'] = NULL;
$arguments278['else'] = NULL;
$arguments278['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array280 = array();
$array281 = array (
);$array280['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array281)]);
$array280['1'] = ' == -2';

$expression282 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};
$arguments278['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression282(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array280)
					),
					$renderingContext
				);
$arguments278['then'] = 'outdated';

$output271 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);

$output271 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments283 = array();
$arguments283['then'] = NULL;
$arguments283['else'] = NULL;
$arguments283['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array285 = array();
$array286 = array (
);$array285['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array286)]);

$expression287 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments283['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression287(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array285)
					),
					$renderingContext
				);
$arguments283['then'] = '';
$arguments283['else'] = 'inactive';

$output271 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output271 .= '">
					';
return $output271;
};
$arguments269 = array();

$output268 .= '';

$output268 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
$output290 = '';

$output290 .= '
						<tr id="';
$array291 = array (
);
$output290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array291)]);

$output290 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments292 = array();
$arguments292['then'] = NULL;
$arguments292['else'] = NULL;
$arguments292['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array294 = array();
$array295 = array (
);$array294['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array295)]);

$expression296 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments292['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression296(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array294)
					),
					$renderingContext
				);
$arguments292['then'] = '';
$arguments292['else'] = 'inactive';

$output290 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);

$output290 .= '">
					';
return $output290;
};
$arguments288 = array();
$arguments288['if'] = NULL;

$output268 .= '';

$output268 .= '
				';
return $output268;
};
$arguments239 = array();
$arguments239['then'] = NULL;
$arguments239['else'] = NULL;
$arguments239['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array265 = array();
$array266 = array (
);$array265['0'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject', $array266);

$expression267 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments239['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression267(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array265)
					),
					$renderingContext
				);
$arguments239['__thenClosure'] = function() use ($renderingContext, $self) {
$output241 = '';

$output241 .= '
						<tr id="';
$array242 = array (
);
$output241 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array242)]);

$output241 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['then'] = NULL;
$arguments243['else'] = NULL;
$arguments243['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array245 = array();
$array246 = array (
);$array245['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array246)]);
$array245['1'] = ' == -1';

$expression247 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments243['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression247(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array245)
					),
					$renderingContext
				);
$arguments243['then'] = 'insecure';

$output241 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments248 = array();
$arguments248['then'] = NULL;
$arguments248['else'] = NULL;
$arguments248['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array250 = array();
$array251 = array (
);$array250['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.terObject.reviewState', $array251)]);
$array250['1'] = ' == -2';

$expression252 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -2);};
$arguments248['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression252(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array250)
					),
					$renderingContext
				);
$arguments248['then'] = 'outdated';

$output241 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output241 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$arguments253['then'] = NULL;
$arguments253['else'] = NULL;
$arguments253['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array255 = array();
$array256 = array (
);$array255['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array256)]);

$expression257 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments253['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression257(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array255)
					),
					$renderingContext
				);
$arguments253['then'] = '';
$arguments253['else'] = 'inactive';

$output241 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output241 .= '">
					';
return $output241;
};
$arguments239['__elseClosures'][] = function() use ($renderingContext, $self) {
$output258 = '';

$output258 .= '
						<tr id="';
$array259 = array (
);
$output258 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array259)]);

$output258 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['then'] = NULL;
$arguments260['else'] = NULL;
$arguments260['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array262 = array();
$array263 = array (
);$array262['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.installed', $array263)]);

$expression264 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments260['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression264(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array262)
					),
					$renderingContext
				);
$arguments260['then'] = '';
$arguments260['else'] = 'inactive';

$output258 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output258 .= '">
					';
return $output258;
};

$output238 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output238 .= '
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
$output302 = '';

$output302 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$output330 = '';

$output330 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
$output333 = '';

$output333 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments334 = array();
$arguments334['key'] = NULL;
$arguments334['id'] = NULL;
$arguments334['default'] = NULL;
$arguments334['arguments'] = NULL;
$arguments334['extensionName'] = NULL;
$arguments334['languageKey'] = NULL;
$arguments334['alternativeLanguageKeys'] = NULL;
$arguments334['key'] = 'extensionList.updateDisabled';

$output333 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext)]);

$output333 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments336 = array();
$arguments336['identifier'] = NULL;
$arguments336['size'] = 'small';
$arguments336['overlay'] = NULL;
$arguments336['state'] = 'default';
$arguments336['alternativeMarkupIdentifier'] = NULL;
$arguments336['identifier'] = 'actions-system-extension-update';

$output333 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments336, $renderChildrenClosure337, $renderingContext);

$output333 .= '
								</span>
							';
return $output333;
};
$arguments331 = array();

$output330 .= '';

$output330 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
$output340 = '';

$output340 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
$output352 = '';

$output352 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments353 = array();
$arguments353['identifier'] = NULL;
$arguments353['size'] = 'small';
$arguments353['overlay'] = NULL;
$arguments353['state'] = 'default';
$arguments353['alternativeMarkupIdentifier'] = NULL;
$arguments353['identifier'] = 'actions-system-extension-update';

$output352 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output352 .= '
									';
return $output352;
};
$arguments341 = array();
$arguments341['additionalAttributes'] = NULL;
$arguments341['data'] = NULL;
$arguments341['class'] = NULL;
$arguments341['dir'] = NULL;
$arguments341['id'] = NULL;
$arguments341['lang'] = NULL;
$arguments341['style'] = NULL;
$arguments341['title'] = NULL;
$arguments341['accesskey'] = NULL;
$arguments341['tabindex'] = NULL;
$arguments341['onclick'] = NULL;
$arguments341['name'] = NULL;
$arguments341['rel'] = NULL;
$arguments341['rev'] = NULL;
$arguments341['target'] = NULL;
$arguments341['action'] = NULL;
$arguments341['controller'] = NULL;
$arguments341['extensionName'] = NULL;
$arguments341['pluginName'] = NULL;
$arguments341['pageUid'] = NULL;
$arguments341['pageType'] = NULL;
$arguments341['noCache'] = NULL;
$arguments341['noCacheHash'] = NULL;
$arguments341['section'] = NULL;
$arguments341['format'] = NULL;
$arguments341['linkAccessRestrictedPages'] = NULL;
$arguments341['additionalParams'] = NULL;
$arguments341['absolute'] = NULL;
$arguments341['addQueryString'] = NULL;
$arguments341['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments341['addQueryStringMethod'] = NULL;
$arguments341['arguments'] = NULL;
$arguments341['action'] = 'updateCommentForUpdatableVersions';
$arguments341['class'] = 'btn btn-default';
// Rendering Array
$array343 = array();
$array343['data-action'] = 'update-extension';
$arguments341['additionalAttributes'] = $array343;
$arguments341['format'] = 'json';
$arguments341['controller'] = 'Download';
// Rendering Array
$array344 = array();
$array345 = array (
);$array344['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array345);
$array346 = array (
);$array344['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array346);
$array347 = array (
);$array344['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array347);
$arguments341['arguments'] = $array344;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments348 = array();
$arguments348['key'] = NULL;
$arguments348['id'] = NULL;
$arguments348['default'] = NULL;
$arguments348['arguments'] = NULL;
$arguments348['extensionName'] = NULL;
$arguments348['languageKey'] = NULL;
$arguments348['alternativeLanguageKeys'] = NULL;
$arguments348['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array350 = array();
$array351 = array (
);$array350['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array351);
$arguments348['arguments'] = $array350;
$arguments341['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext);

$output340 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);

$output340 .= '
							';
return $output340;
};
$arguments338 = array();
$arguments338['if'] = NULL;

$output330 .= '';

$output330 .= '
						';
return $output330;
};
$arguments303 = array();
$arguments303['then'] = NULL;
$arguments303['else'] = NULL;
$arguments303['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array325 = array();
$array326 = array (
);$array325['0'] = $renderingContext->getVariableProvider()->getByPath('isComposerMode', $array326);
$array325['1'] = ' || ';
$array327 = array (
);$array325['2'] = $renderingContext->getVariableProvider()->getByPath('settings.offlineMode', $array327);
$array325['3'] = ' || ';
$array328 = array (
);$array325['4'] = $renderingContext->getVariableProvider()->getByPath('extension.state', $array328);
$array325['5'] = ' == \'excludeFromUpdates\'';

$expression329 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]) == 'excludeFromUpdates'));};
$arguments303['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression329(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array325)
					),
					$renderingContext
				);
$arguments303['__thenClosure'] = function() use ($renderingContext, $self) {
$output305 = '';

$output305 .= '
								<span class="btn btn-default disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments306 = array();
$arguments306['key'] = NULL;
$arguments306['id'] = NULL;
$arguments306['default'] = NULL;
$arguments306['arguments'] = NULL;
$arguments306['extensionName'] = NULL;
$arguments306['languageKey'] = NULL;
$arguments306['alternativeLanguageKeys'] = NULL;
$arguments306['key'] = 'extensionList.updateDisabled';

$output305 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext)]);

$output305 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments308 = array();
$arguments308['identifier'] = NULL;
$arguments308['size'] = 'small';
$arguments308['overlay'] = NULL;
$arguments308['state'] = 'default';
$arguments308['alternativeMarkupIdentifier'] = NULL;
$arguments308['identifier'] = 'actions-system-extension-update';

$output305 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output305 .= '
								</span>
							';
return $output305;
};
$arguments303['__elseClosures'][] = function() use ($renderingContext, $self) {
$output310 = '';

$output310 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
$output322 = '';

$output322 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments323 = array();
$arguments323['identifier'] = NULL;
$arguments323['size'] = 'small';
$arguments323['overlay'] = NULL;
$arguments323['state'] = 'default';
$arguments323['alternativeMarkupIdentifier'] = NULL;
$arguments323['identifier'] = 'actions-system-extension-update';

$output322 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);

$output322 .= '
									';
return $output322;
};
$arguments311 = array();
$arguments311['additionalAttributes'] = NULL;
$arguments311['data'] = NULL;
$arguments311['class'] = NULL;
$arguments311['dir'] = NULL;
$arguments311['id'] = NULL;
$arguments311['lang'] = NULL;
$arguments311['style'] = NULL;
$arguments311['title'] = NULL;
$arguments311['accesskey'] = NULL;
$arguments311['tabindex'] = NULL;
$arguments311['onclick'] = NULL;
$arguments311['name'] = NULL;
$arguments311['rel'] = NULL;
$arguments311['rev'] = NULL;
$arguments311['target'] = NULL;
$arguments311['action'] = NULL;
$arguments311['controller'] = NULL;
$arguments311['extensionName'] = NULL;
$arguments311['pluginName'] = NULL;
$arguments311['pageUid'] = NULL;
$arguments311['pageType'] = NULL;
$arguments311['noCache'] = NULL;
$arguments311['noCacheHash'] = NULL;
$arguments311['section'] = NULL;
$arguments311['format'] = NULL;
$arguments311['linkAccessRestrictedPages'] = NULL;
$arguments311['additionalParams'] = NULL;
$arguments311['absolute'] = NULL;
$arguments311['addQueryString'] = NULL;
$arguments311['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments311['addQueryStringMethod'] = NULL;
$arguments311['arguments'] = NULL;
$arguments311['action'] = 'updateCommentForUpdatableVersions';
$arguments311['class'] = 'btn btn-default';
// Rendering Array
$array313 = array();
$array313['data-action'] = 'update-extension';
$arguments311['additionalAttributes'] = $array313;
$arguments311['format'] = 'json';
$arguments311['controller'] = 'Download';
// Rendering Array
$array314 = array();
$array315 = array (
);$array314['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array315);
$array316 = array (
);$array314['integerVersionStart'] = $renderingContext->getVariableProvider()->getByPath('extension.terObject.integerVersion', $array316);
$array317 = array (
);$array314['integerVersionStop'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.integerVersion', $array317);
$arguments311['arguments'] = $array314;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments318 = array();
$arguments318['key'] = NULL;
$arguments318['id'] = NULL;
$arguments318['default'] = NULL;
$arguments318['arguments'] = NULL;
$arguments318['extensionName'] = NULL;
$arguments318['languageKey'] = NULL;
$arguments318['alternativeLanguageKeys'] = NULL;
$arguments318['key'] = 'extensionList.updateToVersion';
// Rendering Array
$array320 = array();
$array321 = array (
);$array320['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateToVersion.version', $array321);
$arguments318['arguments'] = $array320;
$arguments311['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output310 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext);

$output310 .= '
							';
return $output310;
};

$output302 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext);

$output302 .= '
					';
return $output302;
};
$arguments297 = array();
$arguments297['then'] = NULL;
$arguments297['else'] = NULL;
$arguments297['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array299 = array();
$array300 = array (
);$array299['0'] = $renderingContext->getVariableProvider()->getByPath('extension.updateAvailable', $array300);

$expression301 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments297['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression301(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array299)
					),
					$renderingContext
				);
$arguments297['__thenClosure'] = $renderChildrenClosure298;

$output238 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output238 .= '
				</td>
				<td data-order="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments355 = array();
$arguments355['then'] = NULL;
$arguments355['else'] = NULL;
$arguments355['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array357 = array();
$array358 = array (
);$array357['0'] = $renderingContext->getVariableProvider()->getByPath('extension.installed', $array358);

$expression359 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments355['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression359(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array357)
					),
					$renderingContext
				);
$arguments355['then'] = 'active';
$arguments355['else'] = 'inactive';

$output238 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext);

$output238 .= '">
					';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments360 = array();
$arguments360['additionalAttributes'] = NULL;
$arguments360['data'] = NULL;
$arguments360['class'] = NULL;
$arguments360['dir'] = NULL;
$arguments360['id'] = NULL;
$arguments360['lang'] = NULL;
$arguments360['style'] = NULL;
$arguments360['title'] = NULL;
$arguments360['accesskey'] = NULL;
$arguments360['tabindex'] = NULL;
$arguments360['onclick'] = NULL;
$arguments360['name'] = NULL;
$arguments360['rel'] = NULL;
$arguments360['rev'] = NULL;
$arguments360['target'] = NULL;
$arguments360['action'] = NULL;
$arguments360['controller'] = NULL;
$arguments360['extensionName'] = NULL;
$arguments360['pluginName'] = NULL;
$arguments360['pageUid'] = NULL;
$arguments360['pageType'] = NULL;
$arguments360['noCache'] = NULL;
$arguments360['noCacheHash'] = NULL;
$arguments360['section'] = NULL;
$arguments360['format'] = NULL;
$arguments360['linkAccessRestrictedPages'] = NULL;
$arguments360['additionalParams'] = NULL;
$arguments360['absolute'] = NULL;
$arguments360['addQueryString'] = NULL;
$arguments360['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments360['addQueryStringMethod'] = NULL;
$arguments360['arguments'] = NULL;
$arguments360['extension'] = NULL;
$array362 = array (
);$arguments360['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array362);

$output238 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ToggleExtensionInstallationStateViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext);

$output238 .= '
				</td>
				<td>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure364 = function() use ($renderingContext, $self) {
$output368 = '';

$output368 .= '
						<img class="ext-icon" src="../';
$array369 = array (
);
$output368 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.siteRelPath', $array369)]);
$array370 = array (
);
$output368 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array370)]);

$output368 .= '" alt="';
$array371 = array (
);
$output368 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array371)]);

$output368 .= '" />
					';
return $output368;
};
$arguments363 = array();
$arguments363['then'] = NULL;
$arguments363['else'] = NULL;
$arguments363['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array365 = array();
$array366 = array (
);$array365['0'] = $renderingContext->getVariableProvider()->getByPath('extension.ext_icon', $array366);

$expression367 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments363['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression367(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array365)
					),
					$renderingContext
				);
$arguments363['__thenClosure'] = $renderChildrenClosure364;

$output238 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments363, $renderChildrenClosure364, $renderingContext);

$output238 .= '
					<span title="';
$array372 = array (
);
$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.description', $array372)]);

$output238 .= '">';
$array373 = array (
);
$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.title', $array373)]);

$output238 .= '</span>
				</td>
				<td>
					';
$array374 = array (
);
$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extensionKey', $array374)]);

$output238 .= '
				</td>
				<td>
					';
$array375 = array (
);
$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.version', $array375)]);

$output238 .= '
				</td>
				<td>
					<span class="label label-';
$array376 = array (
);
$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state', $array376)]);

$output238 .= '">';
$array377 = array (
);
$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.state', $array377)]);

$output238 .= '</span>
				</td>
				<td>
					';
$array378 = array (
);
$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extension.type', $array378)]);

$output238 .= '
				</td>
				<td>
					<div class="btn-group">
						';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
$output382 = '';

$output382 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments383 = array();
$arguments383['additionalAttributes'] = NULL;
$arguments383['data'] = NULL;
$arguments383['class'] = NULL;
$arguments383['dir'] = NULL;
$arguments383['id'] = NULL;
$arguments383['lang'] = NULL;
$arguments383['style'] = NULL;
$arguments383['title'] = NULL;
$arguments383['accesskey'] = NULL;
$arguments383['tabindex'] = NULL;
$arguments383['onclick'] = NULL;
$arguments383['name'] = NULL;
$arguments383['rel'] = NULL;
$arguments383['rev'] = NULL;
$arguments383['target'] = NULL;
$arguments383['action'] = NULL;
$arguments383['controller'] = NULL;
$arguments383['extensionName'] = NULL;
$arguments383['pluginName'] = NULL;
$arguments383['pageUid'] = NULL;
$arguments383['pageType'] = NULL;
$arguments383['noCache'] = NULL;
$arguments383['noCacheHash'] = NULL;
$arguments383['section'] = NULL;
$arguments383['format'] = NULL;
$arguments383['linkAccessRestrictedPages'] = NULL;
$arguments383['additionalParams'] = NULL;
$arguments383['absolute'] = NULL;
$arguments383['addQueryString'] = NULL;
$arguments383['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments383['addQueryStringMethod'] = NULL;
$arguments383['arguments'] = NULL;
$arguments383['extensionKey'] = NULL;
$arguments383['class'] = 'btn btn-default';
$array385 = array (
);$arguments383['extensionKey'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array385);

$output382 .= TYPO3\CMS\Extensionmanager\ViewHelpers\UpdateScriptViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext);

$output382 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper
$renderChildrenClosure387 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments386 = array();
$arguments386['additionalAttributes'] = NULL;
$arguments386['data'] = NULL;
$arguments386['class'] = NULL;
$arguments386['dir'] = NULL;
$arguments386['id'] = NULL;
$arguments386['lang'] = NULL;
$arguments386['style'] = NULL;
$arguments386['title'] = NULL;
$arguments386['accesskey'] = NULL;
$arguments386['tabindex'] = NULL;
$arguments386['onclick'] = NULL;
$arguments386['name'] = NULL;
$arguments386['rel'] = NULL;
$arguments386['rev'] = NULL;
$arguments386['target'] = NULL;
$arguments386['action'] = NULL;
$arguments386['controller'] = NULL;
$arguments386['extensionName'] = NULL;
$arguments386['pluginName'] = NULL;
$arguments386['pageUid'] = NULL;
$arguments386['pageType'] = NULL;
$arguments386['noCache'] = NULL;
$arguments386['noCacheHash'] = NULL;
$arguments386['section'] = NULL;
$arguments386['format'] = NULL;
$arguments386['linkAccessRestrictedPages'] = NULL;
$arguments386['additionalParams'] = NULL;
$arguments386['absolute'] = NULL;
$arguments386['addQueryString'] = NULL;
$arguments386['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments386['addQueryStringMethod'] = NULL;
$arguments386['arguments'] = NULL;
$arguments386['extension'] = NULL;
$arguments386['class'] = 'btn btn-default';
$array388 = array (
);$arguments386['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array388);

$output382 .= TYPO3\CMS\Extensionmanager\ViewHelpers\RemoveExtensionViewHelper::renderStatic($arguments386, $renderChildrenClosure387, $renderingContext);

$output382 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
$output395 = '';

$output395 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments396 = array();
$arguments396['identifier'] = NULL;
$arguments396['size'] = 'small';
$arguments396['overlay'] = NULL;
$arguments396['state'] = 'default';
$arguments396['alternativeMarkupIdentifier'] = NULL;
$arguments396['identifier'] = 'actions-system-extension-download';

$output395 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);

$output395 .= '
							';
return $output395;
};
$arguments389 = array();
$arguments389['additionalAttributes'] = NULL;
$arguments389['data'] = NULL;
$arguments389['class'] = NULL;
$arguments389['dir'] = NULL;
$arguments389['id'] = NULL;
$arguments389['lang'] = NULL;
$arguments389['style'] = NULL;
$arguments389['title'] = NULL;
$arguments389['accesskey'] = NULL;
$arguments389['tabindex'] = NULL;
$arguments389['onclick'] = NULL;
$arguments389['name'] = NULL;
$arguments389['rel'] = NULL;
$arguments389['rev'] = NULL;
$arguments389['target'] = NULL;
$arguments389['action'] = NULL;
$arguments389['controller'] = NULL;
$arguments389['extensionName'] = NULL;
$arguments389['pluginName'] = NULL;
$arguments389['pageUid'] = NULL;
$arguments389['pageType'] = NULL;
$arguments389['noCache'] = NULL;
$arguments389['noCacheHash'] = NULL;
$arguments389['section'] = NULL;
$arguments389['format'] = NULL;
$arguments389['linkAccessRestrictedPages'] = NULL;
$arguments389['additionalParams'] = NULL;
$arguments389['absolute'] = NULL;
$arguments389['addQueryString'] = NULL;
$arguments389['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments389['addQueryStringMethod'] = NULL;
$arguments389['arguments'] = NULL;
$arguments389['action'] = 'downloadExtensionZip';
$arguments389['controller'] = 'Action';
// Rendering Array
$array391 = array();
$array392 = array (
);$array391['extension'] = $renderingContext->getVariableProvider()->getByPath('extension.key', $array392);
$arguments389['arguments'] = $array391;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments393 = array();
$arguments393['key'] = NULL;
$arguments393['id'] = NULL;
$arguments393['default'] = NULL;
$arguments393['arguments'] = NULL;
$arguments393['extensionName'] = NULL;
$arguments393['languageKey'] = NULL;
$arguments393['alternativeLanguageKeys'] = NULL;
$arguments393['key'] = 'extensionList.downloadzip';
$arguments389['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments393, $renderChildrenClosure394, $renderingContext);
$arguments389['class'] = 'btn btn-default';

$output382 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext);

$output382 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper
$renderChildrenClosure399 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments398 = array();
$arguments398['additionalAttributes'] = NULL;
$arguments398['data'] = NULL;
$arguments398['class'] = NULL;
$arguments398['dir'] = NULL;
$arguments398['id'] = NULL;
$arguments398['lang'] = NULL;
$arguments398['style'] = NULL;
$arguments398['title'] = NULL;
$arguments398['accesskey'] = NULL;
$arguments398['tabindex'] = NULL;
$arguments398['onclick'] = NULL;
$arguments398['name'] = NULL;
$arguments398['rel'] = NULL;
$arguments398['rev'] = NULL;
$arguments398['target'] = NULL;
$arguments398['action'] = NULL;
$arguments398['controller'] = NULL;
$arguments398['extensionName'] = NULL;
$arguments398['pluginName'] = NULL;
$arguments398['pageUid'] = NULL;
$arguments398['pageType'] = NULL;
$arguments398['noCache'] = NULL;
$arguments398['noCacheHash'] = NULL;
$arguments398['section'] = NULL;
$arguments398['format'] = NULL;
$arguments398['linkAccessRestrictedPages'] = NULL;
$arguments398['additionalParams'] = NULL;
$arguments398['absolute'] = NULL;
$arguments398['addQueryString'] = NULL;
$arguments398['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments398['addQueryStringMethod'] = NULL;
$arguments398['arguments'] = NULL;
$arguments398['extension'] = NULL;
$arguments398['class'] = 'btn btn-default';
$array400 = array (
);$arguments398['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array400);

$output382 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ReloadSqlDataViewHelper::renderStatic($arguments398, $renderChildrenClosure399, $renderingContext);

$output382 .= '
						';
return $output382;
};
$arguments379 = array();
$arguments379['additionalAttributes'] = NULL;
$arguments379['data'] = NULL;
$arguments379['extension'] = NULL;
$array381 = array (
);$arguments379['extension'] = $renderingContext->getVariableProvider()->getByPath('extension', $array381);

$output238 .= TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper::renderStatic($arguments379, $renderChildrenClosure380, $renderingContext);

$output238 .= '
					</div>
				</td>
				</tr>
			';
return $output238;
};
$arguments235 = array();
$arguments235['each'] = NULL;
$arguments235['as'] = NULL;
$arguments235['key'] = NULL;
$arguments235['reverse'] = false;
$arguments235['iteration'] = NULL;
$array237 = array (
);$arguments235['each'] = $renderingContext->getVariableProvider()->getByPath('extensions', $array237);
$arguments235['as'] = 'extension';
$arguments235['key'] = 'extensionKey';

$output207 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output207 .= '
		</tbody>
	</table>
	</div>
';
return $output207;
};
$arguments205 = array();
$arguments205['name'] = NULL;
$arguments205['name'] = 'content';

$output197 .= NULL;

$output197 .= '
';

return $output197;
}


}
#