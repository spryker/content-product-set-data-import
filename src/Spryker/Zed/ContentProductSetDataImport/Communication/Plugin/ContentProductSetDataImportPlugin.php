<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Spryker\Zed\ContentProductSetDataImport\Communication\Plugin;

use Generated\Shared\Transfer\DataImporterConfigurationTransfer;
use Generated\Shared\Transfer\DataImporterReportTransfer;
use Spryker\Zed\ContentProductSetDataImport\ContentProductSetDataImportConfig;
use Spryker\Zed\DataImport\Dependency\Plugin\DataImportPluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \Spryker\Zed\ContentProductSetDataImport\Business\ContentProductSetDataImportFacadeInterface getFacade()
 * @method \Spryker\Zed\ContentProductSetDataImport\ContentProductSetDataImportConfig getConfig()
 */
class ContentProductSetDataImportPlugin extends AbstractPlugin implements DataImportPluginInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\DataImporterConfigurationTransfer|null $dataImporterConfigurationTransfer
     *
     * @return \Generated\Shared\Transfer\DataImporterReportTransfer
     */
    public function import(?DataImporterConfigurationTransfer $dataImporterConfigurationTransfer = null): DataImporterReportTransfer
    {
        /** @phpstan-var \Generated\Shared\Transfer\DataImporterConfigurationTransfer $dataImporterConfigurationTransfer */
        return $this->getFacade()->importProductSetTerm($dataImporterConfigurationTransfer);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @return string
     */
    public function getImportType(): string
    {
        return ContentProductSetDataImportConfig::IMPORT_TYPE_CONTENT_PRODUCT_SET;
    }
}
