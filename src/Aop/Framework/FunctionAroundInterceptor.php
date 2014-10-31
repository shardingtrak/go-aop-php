<?php
/**
 * Go! AOP framework
 *
 * @copyright Copyright 2013, Lisachenko Alexander <lisachenko.it@gmail.com>
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Go\Aop\Framework;

use Exception;
use Go\Aop\AdviceAround;
use Go\Aop\Intercept\FunctionInvocation;
use Go\Aop\Intercept\FunctionInterceptor;
use Go\Aop\Intercept\Joinpoint;

/**
 * "Around" interceptor of function execution
 */
class FunctionAroundInterceptor extends BaseInterceptor implements FunctionInterceptor, AdviceAround
{
    /**
     * Around invoker
     *
     * @param FunctionInvocation $joinpoint the function invocation joinpoint
     *
     * @return mixed the result of the call to {@link Joinpoint::proceed()}
     * @throws Exception
     */
    final public function invoke(Joinpoint $joinpoint)
    {
        $adviceMethod = $this->adviceMethod;

        return $adviceMethod($joinpoint);
    }
}
