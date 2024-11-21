import { Feature } from "@/types";

export default function FeatureItem({ feature }: { feature: Feature }) {
  return (
    <div className="overflow-hidden mb-4 border-1 wrapbg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
      <div className="p-6 text-gray-900 dark:text-gray-100">
        <pre className="text-balance">
          {JSON.stringify(feature, undefined, 2)}
        </pre>
      </div>
    </div>
  );
}
