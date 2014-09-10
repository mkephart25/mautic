<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

$view->extend('MauticCoreBundle:Default:content.html.php');
$view['slots']->set('mauticContent', 'campaign');
$view['slots']->set("headerTitle", $view['translator']->trans('mautic.campaign.header.index'));
$view['slots']->set('searchUri', $view['router']->generate('mautic_campaign_index', array('page' => $page)));
$view['slots']->set('searchString', $app->getSession()->get('mautic.campaign.filter'));
$view['slots']->set('searchHelp', $view['translator']->trans('mautic.core.help.searchcommands'));
?>

<?php if ($permissions['campaign:campaigns:create']): ?>
    <?php $view['slots']->start("actions"); ?>
    <li>
        <a href="<?php echo $this->container->get('router')->generate(
            'mautic_campaign_action', array("objectAction" => "new")); ?>"
           data-toggle="ajax"
           data-menu-link="#mautic_campaign_index">
            <?php echo $view["translator"]->trans("mautic.campaign.menu.new"); ?>
        </a>
    </li>
    <?php $view['slots']->stop(); ?>
<?php endif; ?>

<?php $view['slots']->output('_content'); ?>